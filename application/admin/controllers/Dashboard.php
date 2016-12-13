<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->data = [];
        $this->data['user_type'] = $this->user_type;
    }

    function index() {
        $this->data['INFO'] = (!isset($inner['INFO'])) ?
                $this->session->flashdata('message') : $this->data['INFO'];
        $this->load->model('reports/Reportsmodel');
        $Userdata = $this->flexi_auth->get_user_custom_data();
  
        if ($Userdata['uacc_group_fk'] == 3) {
            $this->data['yealychartdata'] = $this->Reportsmodel->getYearlySalesReport();
            $this->data['orderdata'] = $this->Reportsmodel->getAllOrders();
            
        }

        if ($Userdata['uacc_group_fk'] == 7) {
            $this->data['orderdata'] = $this->Reportsmodel->getUserAllOrders($Userdata['uacc_id']);
        }

        if ($Userdata['uacc_group_fk'] == 2) {
//            $this->data['barchartdata'] = $this->Reportsmodel->getCompanyDashboardBarchart($Userdata['upro_profession'], $duration = NULL);
            $this->data['orderdata'] = $this->Reportsmodel->getComapanyAllOrders($Userdata['uacc_id']);
        }

        if ($Userdata['uacc_group_fk'] == 6) {
            $this->data['orderdata'] = $this->Reportsmodel->getComapanyAllOrders($Userdata['upro_approval_acc']);
//            $this->data['piechartdata'] = $this->Reportsmodel->getCompanyDashboardPiechart($Userdata['uacc_id']);
        }

        $this->data['content'] = $this->load->view(THEME . 'welcome/dashboard', $this->data, TRUE);
        $this->load->view(THEME . 'templates/default-with-menu-home', $this->data);
    }

    function profile() {
        if (!$this->flexi_auth->is_privileged('View Profile')) {
            $this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to view View Profile.</p>');
            redirect('dashboard');
        }
        $this->load->model('Commonusermodel');
        $this->Commonusermodel->get_comp_user_profile($this->flexi_auth->get_user_id());
        if ($this->user_type == USER) {
            $users_assigned_dept = json_decode($this->data['user_profile']->upro_department);
            if (!is_array($users_assigned_dept) or is_null($users_assigned_dept or empty($users_assigned_dept))) {
                $users_assigned_dept = [''];
            }
            $this->data['user_dept'] = $this->Commonusermodel->getUserAssignedDept($users_assigned_dept);
        }
        $this->data['user_company'] = '';
        if ($this->data['user_profile']->upro_company && !empty($this->data['user_profile']->upro_company)) {
            $opt = [];
            $opt['result'] = 'row';
            $opt['select'] = 'name';
            $opt['from_tbl'] = 'company';
            $opt['where']['company_code'] = $this->data['user_profile']->upro_company;
            $comp = $this->Commonusermodel->get_all($opt);
            $this->data['user_company'] = $comp['name'];
        }
        $this->data['user_approval_title'] = '';
        $this->data['user_approval_name'] = '';
        if (!empty($this->data['user_profile']->upro_approval_acc) && $this->data['user_profile']->upro_approval_acc) {


            $this->data['user_approval_title'] = $this->data['user_profile']->ugrp_name == USER ? 'Register User' : 'Troop';
            $opt = [];
            $opt['result'] = 'row';
            $opt['select'] = 'upro_first_name, upro_last_name';
            $opt['from_tbl'] = 'user_profiles';
            $opt['where']['upro_uacc_fk'] = $this->data['user_profile']->upro_approval_acc;
            $approver_name = $this->Commonusermodel->get_all($opt);

            if (!empty($approver_name)) {
                $this->data['user_approval_name'] = ucfirst($approver_name['upro_first_name']) . ' ' . $approver_name['upro_last_name'];
            }
        }
        $this->data['profile'] = true;
        $this->data['content'] = $this->load->view('user/users/user-profile', $this->data, TRUE);
        $this->load->view($this->template['default'], $this->data);
    }
    
    
    
    function getTotalAmtAndQty() {
        $company_code = '';
        if ($this->user_type == CMP_ADMIN) {
            $company_code = $this->flexi_auth->get_comp_admin_company_code();
        }
        $checkLogin = null;
        $checkLogin = $this->input->post("var", true);

        if ($checkLogin == "notCompany") {
            $usersIds = array();

            $ids = array();

            if ($this->user_type == CMP_MD) {
                $PMIds = $this->db->select("upro_uacc_fk,upro_approval_acc")->from("user_profiles")->where("upro_approval_acc", $this->flexi_auth->get_user_id())->get()->result_array();
                foreach ($PMIds as $PMkey => $PMvalue) {
                    $usersIds = $this->db->select("upro_uacc_fk,upro_approval_acc")->from("user_profiles")->where("upro_approval_acc", $PMvalue['upro_uacc_fk'])->get()->result_array();
                    foreach ($usersIds as $key => $value) {
                        $ids[] = $value['upro_uacc_fk'];
                    }
                    $ids[] = $PMvalue['upro_uacc_fk'];
                }
                $ids[] = $this->flexi_auth->get_user_id();
            }


            if ($this->user_type == CMP_PM) {
                $usersIds = $this->db->select("upro_uacc_fk,upro_approval_acc")->from("user_profiles")->where("upro_approval_acc", $this->flexi_auth->get_user_id())->get()->result_array();
                foreach ($usersIds as $key => $value) {
                    $ids[] = $value['upro_uacc_fk'];
                }
                $ids[] = $this->flexi_auth->get_user_id();
            }
        }

        $from = $this->input->post("from", true);
        $to = $this->input->post("to", true);
        $from = date_format(date_create($from), "Y-m-d");
        $to = date_format(date_create($to), "Y-m-d");

        $this->db->select("sum(order_qty) qty,sum(order_total) amount");
        $this->db->from('order');
        if ($checkLogin == "notCompany") {
            $this->db->where_in("customer_id", $ids);
        } else {
            $this->db->where("company_code", $company_code);
        }
        $this->db->where('Date(order_time) >=', $from);
        $this->db->where('Date(order_time) <=', $to);
        $this->db->order_by("order_time", "asc");
        $result = $this->db->get()->row_array();
        if ($result) {
            echo json_encode($result);
        } else {
            echo "[]";
        }
    }

    function getTotalOrderVolume() {
        $months = array(1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "Jul", 8 => "Aug", 9 => "Sep", 10 => "Oct", 11 => "Nov", 12 => "Dec");
        $company_code = '';
        if ($this->user_type == CMP_ADMIN) {
            $company_code = $this->flexi_auth->get_comp_admin_company_code();
        }
        $checkLogin = null;
        $checkLogin = $this->input->post("var", true);
        if ($checkLogin == "notCompany") {
            $usersIds = array();
            $ids = array();
            if ($this->user_type == CMP_MD) {
                $PMIds = $this->db->select("upro_uacc_fk,upro_approval_acc")->from("user_profiles")->where("upro_approval_acc", $this->flexi_auth->get_user_id())->get()->result_array();
                foreach ($PMIds as $PMkey => $PMvalue) {
                    $usersIds = $this->db->select("upro_uacc_fk,upro_approval_acc")->from("user_profiles")->where("upro_approval_acc", $PMvalue['upro_uacc_fk'])->get()->result_array();
                    foreach ($usersIds as $key => $value) {
                        $ids[] = $value['upro_uacc_fk'];
                    }
                    $ids[] = $PMvalue['upro_uacc_fk'];
                }
                $ids[] = $this->flexi_auth->get_user_id();
            }


            if ($this->user_type == CMP_PM) {
                $usersIds = $this->db->select("upro_uacc_fk,upro_approval_acc")->from("user_profiles")->where("upro_approval_acc", $this->flexi_auth->get_user_id())->get()->result_array();
                foreach ($usersIds as $key => $value) {
                    $ids[] = $value['upro_uacc_fk'];
                }
                $ids[] = $this->flexi_auth->get_user_id();
            }
        }
        $selected = $this->input->post("selectedTab", true);
        $selectVal = "";
        $groupBy = "";
        if ($selected == "month") {
            $selectVal = "sum(order_qty) value, month(DATE(order_time)) month,year(DATE(order_time)) year, sum(order_total) amount";
            $groupBy = "month,year";
        } else if ($selected == "week") {
            $selectVal = "sum(order_qty) value, week(DATE(order_time)) week,year(DATE(order_time)) year, sum(order_total) amount";
            $groupBy = "week,year";
        } else if ($selected == "year") {
            $selectVal = "sum(order_qty) value, year(DATE(order_time)) year, sum(order_total) amount";
            $groupBy = "year";
        } else {
            $selectVal = "sum(order_qty) value, day(DATE(order_time)) day,month(DATE(order_time)) month, year(DATE(order_time)) year, sum(order_total) amount";
            $groupBy = "Date(order_time)";
        }
        $from = $this->input->post("from", true);
        $to = $this->input->post("to", true);
        $from = date_format(date_create($from), "Y-m-d");
        $to = date_format(date_create($to), "Y-m-d");
        $this->db->select($selectVal);
        $this->db->from('order');
        if ($checkLogin == "notCompany") {
            $this->db->where_in("customer_id", $ids);
        } else {
            $this->db->where("company_code", $company_code);
        }
        $this->db->where('Date(order_time) >=', $from);
        $this->db->where('Date(order_time) <=', $to);
        $this->db->group_by($groupBy);
        $this->db->order_by("order_time", "asc");
        $result = $this->db->get()->result_array();
        $data = array();
        if ($selected == "month") {
            foreach ($result as $value) {
                $data[] = array(
                    "category" => $months[$value["month"]] . "\n" . $value["year"],
                    "value" => $value["value"],
                    "amount" => $value["amount"],
                    "month" => $value["month"]
                );
            }
        } else if ($selected == "week") {
            foreach ($result as $value) {
                $data[] = array(
                    "category" => "Week: " . $value["week"] . "\nYear: " . $value["year"],
                    "value" => $value["value"],
                    "amount" => $value["amount"],
                    "week" => $value["week"]
                );
            }
        } else if ($selected == "year") {
            foreach ($result as $value) {
                $data[] = array(
                    "category" => $value["year"],
                    "value" => $value["value"],
                    "amount" => $value["amount"],
                    "year" => $value["year"]
                );
            }
        } else {
            foreach ($result as $value) {
                $data[] = array(
                    "category" => $value["day"] . ' ' . $months[$value["month"]] . '<br>' . $value["year"],
                    "value" => $value["value"],
                    "amount" => $value["amount"],
                    "day" => $value["day"]
                );
            }
        }
        if ($data) {
            echo json_encode($data);
        } else {
            echo "[]";
        }
    }

}
