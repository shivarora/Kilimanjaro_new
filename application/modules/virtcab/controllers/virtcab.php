<?php

class virtcab extends CMS_Controller {

    private $imgArray;
    private $docArray;
    private $videoArray;
    protected $extImgArray;

    function __construct() {

        parent::__construct();
        $this->load->helper('form');
//        $this->load->library('Notification');
//        $this->load->model('user/Usermodel');
        $this->load->model('VirtualCabinetmodel');
        $this->imgArray = array('jpg', 'png', 'gif');
        $this->docArray = array('txt', 'rtf', 'doc', 'pdf', 'xlsx', 'ppsx', 'pptx', 'sldx', 'docx');
        $this->extImgArray = array(
            'txt' => 'img_path',
            'rtf' => 'img_path',
            'doc' => 'images/fordoc.png',
            'pdf' => 'images/forpdf.png',
            'xlsx' => 'img_path',
            'ppsx' => 'img_path',
            'pptx' => 'img_path',
            'sldx' => 'img_path',
            'docx' => 'images/fordoc.png',
            'jpg' => 'images/forjpg.png',
            'png' => 'images/forpng.png',
            'PNG' => 'images/forpng.png',
            'mp4' => 'images/virtualcab/mp4.png',
            'flv' => 'images/virtualcab/flv.png',
            'gif' => 'img_path',
        );
        $this->videoArray = array('mp4', 'oog', 'flv');
        if ($this->aauth->isUser()) {
//            redirect('user');
        }
    }

    function index($file = null) {
//        ini_set('display_errors','On');
        $this->load->model('user/usermodel');
        $page = array();
        $inner = array();
        $this->load->helper('text');
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->library('form_validation');
//        $inner['users'] = $this->Usermodel->listAll();
        $inner['users'] = array();
        $inner['userOwnFiles'] = null;
        $inner['userSharedFiles'] = null;
        $inner['countfiles'] = $this->VirtualCabinetmodel->getAllGroupBy('filetype');
        $inner['allAvailGrps'] = $this->aauth->list_groups();
        foreach ($inner['allAvailGrps'] as $kval) {
            if ($kval->id != 3) {
                continue;
            }
            $inner['AvailGrps'][$kval->id] = $kval->name;
        }
//        e($this->session->all_userdata());
        $myShareFileOpt = array('columns' => 'filetype, id, visible_name, actual_name, assignes',
            'order-field' => 'filetype',
            'order-by' => 'desc',
            $this->VirtualCabinetmodel->creator_id => $this->session->userdata['applicant_id'],
        );

        $othrShareFile = array('shared' => true,
            'columns' => 'virtualCab.id, assignes,visible_name, filetype, actual_name, creator_id, fname',
            $this->VirtualCabinetmodel->assignes => $this->session->userdata['applicant_id'],
            'order-field' => 'fname',
            'order-by' => 'desc',
        );
        $tab1 = ' active ';
        $tab2 = '';
        if (isset($_POST['searchfile'])) {
            if ($_POST['currentTab'] == 2) {
                $tab1 = '  ';
                $tab2 = ' active ';
                $myShareFileOpt['searchKey'] = $_POST['searchfile'];
            }
            if ($_POST['currentTab'] == 1) {
                $tab2 = '  ';
                $tab1 = ' active ';
                $othrShareFile['searchKey'] = $_POST['searchfile'];
            }
        }
        $inner['tab1'] = $tab1;
        $inner['tab2'] = $tab2;
        $inner['myShareFiles'] = $this->VirtualCabinetmodel->listAll(0, 0, $myShareFileOpt);
        $inner['userSharedFiles'] = $this->VirtualCabinetmodel->listAll(0, 0, $othrShareFile);
//        e($othrShareFile,0);
//        e($inner['userSharedFiles']);
        $inner['sharedWithMeHtml'] = $this->localFileDisplay($inner['userSharedFiles']);
        $inner['myFilesHtml'] = $this->localFileDisplay($inner['myShareFiles'], true);
        $inner['addEditJs'] = false;
        if (!is_null($inner['myFilesHtml']) || !empty($inner['myFilesHtml'])) {
            $inner['addEditJs'] = true;
        }
        $inner['imgArray'] = $this->imgArray;
        $inner['docArray'] = $this->docArray;
        $inner['extImgArray'] = $this->extImgArray;
//        e($inner);
        $page['contents'] = $this->load->view('index', $inner, TRUE);
//        $this->load->view('themes/default/templates/default', $page);
        $this->load->view('themes/default/templates/subpage', $page);
    }

    function setEditPermission() {
        $fileID = gParam('editFileId');
        $assignArr = array();
        if (isset($_POST['file_share_id'])) {
            $assignArr = $_POST['file_share_id'];
        } else if (isset($_POST['virCabShareEditGrpUsr'])) {
            $assignArr = $_POST['virCabShareEditGrpUsr'];
        }
        if (intval($fileID)) {
            $data = array();
            $data[$this->VirtualCabinetmodel->assigne_grp] = gParam('virCabShareEditGrp');
            $data[$this->VirtualCabinetmodel->assignes] = implode(',', $assignArr);
            $this->VirtualCabinetmodel->updateRecord(array('id' => $fileID, 'data' => $data));
        }
        redirect('virtcab');
    }

    function fillcab() {
        ini_set('upload_max_filesize', '40M');
        $imgArray = array('jpg', 'png', 'gif');
        $docArray = array('txt', 'rtf', 'doc', 'pdf', 'xlsx', 'ppsx', 'pptx', 'sldx', 'docx');
        $videoArray = $this->videoArray;
        $allowedTypesStr = 'jpg|png|gif|txt|rtf|doc|pdf|xlsx|ppsx|pptx|sldx|docx|mp4|oog|flv';

        $allowedTypes = array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'txt' => 'text/plain',
            'rtf' => 'application/rtf',
            'rtf' => 'application/x-rtf',
            'rtf' => 'text/richtext',
            'doc' => 'application/msword',
            'pdf' => 'application/pdf',
            'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'ppsx' => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
            'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
            'sldx' => 'application/vnd.openxmlformats-officedocument.presentationml.slide',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'mp4' => 'video/mp4',
            'oog' => 'video/ogg',
            'flv' => 'video/flv'
        );

        try {
            switch ($_FILES['virtfile']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    throw new RuntimeException('No file sent.');
                case UPLOAD_ERR_INI_SIZE:
                    throw new RuntimeException('Exceeded conf filesize limit.');
                case UPLOAD_ERR_FORM_SIZE:
                    throw new RuntimeException('Exceeded filesize limit.');
                default:
                    throw new RuntimeException('Unknown errors.');
            }

            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $ext = strtolower(array_search($finfo->file($_FILES['virtfile']['tmp_name']), $allowedTypes, true));
            if (false === $ext) {
                throw new RuntimeException('Invalid file format.');
            }

            $virCabPath = $this->config->item('UPLOAD_PATH_VIRCAB_MISC');
            if (in_array($ext, $imgArray)) {
                $virCabPath = $this->config->item('UPLOAD_PATH_VIRCAB_IMG');
            } else if (in_array($ext, $docArray)) {
                $virCabPath = $this->config->item('UPLOAD_PATH_VIRCAB_DOC');
            } else if (in_array(strtolower($ext), $videoArray)) {
                $virCabPath = $this->config->item('UPLOAD_PATH_VIRCAB_VIDEO');
            }
            $uniqueTime = time();
            $userId = $this->session->userdata['applicant_id'];
            $config['file_name'] = $uniqueTime . $userId . '.' . $ext;
            $newFileName = $config['file_name'];
            $config['upload_path'] = $virCabPath;
            $config['allowed_types'] = $allowedTypesStr;
            $config['allowed_types'] = '*';
            $config['max_size'] = '25000000';

            $this->load->library('upload', $config);

            if (count($_FILES) > 0) {
                if ($_FILES['virtfile']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['virtfile']['tmp_name'])) {
                    if (!$this->upload->do_upload('virtfile')) {
                        $uploadError = $this->upload->display_errors('<p class="err">', '</p>');
                        $this->session->set_flashdata('custom-msg', $uploadError);
                        redirect('virtcab');
                    } else {
                        $upload_data = $this->upload->data();
                        $data = array();
                        $usersAssignesGrp = $this->input->post('virCabShareMainId');
                        $usersAssignes = $this->input->post('virCabShareMainGrpId');
                        $data[$this->VirtualCabinetmodel->assigne_grp] = is_null($usersAssignesGrp) || empty($usersAssignesGrp) ? 0 : $usersAssignesGrp;
                        $data[$this->VirtualCabinetmodel->visible_name] = $newFileName;
                        $data[$this->VirtualCabinetmodel->actual_name] = $upload_data['client_name'];
                        $data[$this->VirtualCabinetmodel->filetype] = $ext;
                        $data[$this->VirtualCabinetmodel->update_dtime] = date('Y-m-d H:i:s');
                        $data[$this->VirtualCabinetmodel->create_dtime] = date('Y-m-d H:i:s');
                        $data[$this->VirtualCabinetmodel->assignes] = is_null($usersAssignes) || empty($usersAssignes) ? 0 : $usersAssignes;
                        $data[$this->VirtualCabinetmodel->creator_id] = $userId;
//                        e()
                        $data['is_applicant'] = 0;
                        $virtual_event_id = $this->VirtualCabinetmodel->insertRecord($data, true);
//                        $notify_data = array(
//                            'class' => $this->router->fetch_class(),
//                            'method' => $this->router->fetch_method(),
//                            'creator_id' => $data[$this->VirtualCabinetmodel->creator_id],
//                            'creator_name' => $this->session->userdata['name'],
//                            'sender_id' => $data[$this->VirtualCabinetmodel->creator_id],
//                            'sender_name' => $this->session->userdata['name'],
//                            'assigne_grp' => $data[$this->VirtualCabinetmodel->assigne_grp],
//                            'assigne_id' => $data[$this->VirtualCabinetmodel->assignes],
//                            'event_title' => $data[$this->VirtualCabinetmodel->actual_name],
//                            'event_id' => $virtual_event_id,
//                            'filter' => '',
//                        );
//                        $this->notification->notify($notify_data);
                        //$data = array('success' => 1, 'msg' => 'done');
                    }
                }
            }
        } catch (Exception $ex) {
            $uploadError = $ex->getMessage();
            $this->session->set_flashdata('custom-msg', $uploadError);
            //$data = array('success' => 0, 'msg' => $ex->getMessage(), 'file-index' => $fileIndex);
        }
        redirect("virtcab", 'location');
    }

    function deletefile($fileId = null) {
        if (!$fileId) {
            $fileId = gParam('fileid', false, true);
        }
        $fileDet = $this->VirtualCabinetmodel->fetchByID($fileId);
        if ($fileDet) {
            $ext = $fileDet[$this->VirtualCabinetmodel->filetype];
            $virCabPath = $this->config->item('UPLOAD_PATH_VIRCAB_MISC');
            if (in_array($ext, $this->imgArray)) {
                $virCabPath = $this->config->item('UPLOAD_PATH_VIRCAB_IMG');
            } else if (in_array($ext, $this->docArray)) {
                $virCabPath = $this->config->item('UPLOAD_PATH_VIRCAB_DOC');
            }
            $file = $virCabPath . $fileDet[$this->VirtualCabinetmodel->visible_name];
            $this->VirtualCabinetmodel->deleteByID($fileDet['id']);
            if (file_exists($file) && unlink($file)) {
                
            }
            echo json_encode(array('success' => 1));
        } else {
            echo json_encode(array('success' => 1, 'msg' => 'File Not Exist'));
        }
        exit;
    }

    function getGrpUsers($grpId = null, $internal = array()) {
        if (!$grpId)
            return null;
//        $result = $this->Usermodel->listAllAsGrp(False, false, 'id, name', array('where' => 'group_id = ' . $grpId));
        $this->load->model('user/Usermodel');
//        $result = $this->Usermodel->getApplicants($this->company_id);
        $result = $this->Usermodel->getCompanys();
        $datamsg = null;
        $selectRes = array();
        if ($result) {
            foreach ($result as $key => $kval) {
                $selectRes[$kval['id']] = $kval['company_name'];
            }
        }
        $selectedArr = array();
        if (isset($internal['assignTo'])) {
            $selectedArr = explode(',', $internal['assignTo']);
        }
        $js = 'id="file_share_id" multiple';
        $retHtml = '<div>' . form_dropdown('file_share_id[]', $selectRes, $selectedArr, $js) . '</div>';
        $retHtml .= '<script>
                        $(document).ready(
                            function () {
                                        $("#file_share_id").multiselect({
                                        onChange: function (option, checked, select) {                                            
                                            $("#virCabShareMainGrpId").val($("#file_share_id").val());
                                        },
                                        includeSelectAllOption: true,
                                        enableFiltering:true,
                                        });
                            });
                    </script>
            ';
        if ($internal) {
            return $retHtml;
        }
        $datamsg = array('success' => 1, 'msg' => $retHtml);
        echo json_encode($datamsg);
        exit;
    }

    function getFilePermissionOpt($fileId) {
        if (!$fileId || !intval($fileId))
            return null;
        $datamsg = null;
        $inner = $selectRes = $selectedArr = array();

        $result = $this->VirtualCabinetmodel->fetchByID($fileId);
        if ($result) {
            $inner['allAvailGrps'] = $this->aauth->list_groups();
            foreach ($inner['allAvailGrps'] as $kval) {
                if ($kval->id == '5' || $kval->id == '6') {
                    continue;
                }
                $inner['AvailGrps'][$kval->id] = $kval->name;
            }

            $GrpUsers = null;
            $GrpUsers = $this->Usermodel->listAllAsGrp(False, false, 'id, name', array('where' => 'group_id = ' . $result['assigne_grp']));
            if ($GrpUsers) {
                foreach ($GrpUsers as $key => $kval) {
                    $inner['GrpUsers'][$kval['id']] = $kval['name'];
                }
            } else {
                $inner['GrpUsers'] = array();
            }

            if (isset($result['assignes']) && !empty($result['assignes'])) {
                $selectedArr = explode(',', $result['assignes']);
            }

            $formHtml = '<div class="clearfix" style="margin:0 0 10px 0;">
                            <h4>Choose to whom you want to share file, if not selected it remain private</h4> <div class="col-sm-4">';
            $js = 'class="form-control" id="virCabShareEditGrp" ';

            $formHtml .= form_dropdown('virCabShareEditGrp', $inner['AvailGrps'], $result['assigne_grp'], $js);
            $formHtml .= '</div><div class="col-sm-8">
                            <label class="col-md-5 control-label" id="editGrpLabel"></label>
                            <div class="col-md-7" id="editGrpSelect">';
            $js = 'class="form-control" id="virCabShareEditGrpUsr" multiple ';

            $formHtml .= form_dropdown('virCabShareEditGrpUsr[]', $inner['GrpUsers'], $selectedArr, $js);
            $formHtml .= '</div></div></div>';

            $formHtml .= '<script>
                            $(document).ready(function () {     
                                $("#virCabShareEditGrp").multiselect({
                                    onChange: function (option, checked, select) {
                                    var grp_id = $("#virCabShareEditGrp").val();
                                    $("#editGrpLabel").html("");
                                    $("#editGrpSelect").html("");            
                                    var req_url = \'' . createUrl('virtcab/getGrpUsers/') . '\' + grp_id;
                                    $("#virCabShareMainId").val(grp_id);
                                        $.ajax({
                                        url: req_url,
                                        type: "GET",
                                        success: function (data, textStatus, jqXHR)
                                        {
                                            var data = jQuery.parseJSON(data);
                                            $("#editGrpLabel").append("Choose Option");
                                            $("#editGrpSelect").append(data.msg);
                                        }
                                        });
                                    }
                                });
                                $("#virCabShareEditGrpUsr").multiselect({
                                    onChange: function (option, checked, select) {},
                                    includeSelectAllOption: true,
                                    enableFiltering:true,
                                });
                            });
                    </script>
            ';
            $datamsg = array('success' => 1, 'msg' => $formHtml);
            echo json_encode($datamsg);
        } else {
            $datamsg = array('success' => 0, 'msg' => 'Server Error....');
        }
        exit;
    }

    function localFileDisplay($allFiles = null, $setDelPer = false) {
        $listHtml = null;
        $typeext = null;
        $listingHtml = null;
        $imgArray = $this->imgArray;
        $extImgArray = $this->extImgArray;
        $docArray = $this->docArray;
        $videoArray = $this->videoArray;
        foreach ($allFiles as $kval) {
            $lastIndex = strrpos($kval['actual_name'], '.');
            $ext = substr($kval['actual_name'], $lastIndex + 1);
            $ext = strtolower($ext);
            $virCabPath = $this->config->item('UPLOAD_URL_VIRCAB_MISC');
            if (in_array($ext, $imgArray)) {
                $virCabPath = $this->config->item('UPLOAD_URL_VIRCAB_IMG');
            } else if (in_array($ext, $docArray)) {
                $virCabPath = $this->config->item('UPLOAD_URL_VIRCAB_DOC');
            } else if (in_array($ext, $videoArray)) {
                $virCabPath = $this->config->item('UPLOAD_URL_VIRCAB_VIDEO');
            }
            $newImgName = substr($kval['actual_name'], 0, ($lastIndex));
            $newImgName = substr($newImgName, 0, 15) . '..';
            if ($typeext != $kval['filetype']) {
                $typeext = $kval['filetype'];
                if (!isset($listHtml[$typeext])) {
                    $listHtml[$typeext] = null;
                }
            }
            if ($typeext == 'pdf' || $typeext == 'txt' || $typeext == 'doc' || $typeext == 'xlsx' || $typeext == 'docx' || $typeext == 'docx') {
                //'onClick="window.open=('path', '_blank', 'fullscreen=yes'); return false;'
                $listHtml[$typeext] .= '<li class="litypes col-sm-2 mar-bot10">'
                        . '<div class="comn">' .
                        ($setDelPer ? '<div><span style="cursor: pointer; cursor: hand;" data-id="' . $kval['id'] . '" class="editPermission fa fa-send-o"></span> 
                                            <span style="cursor: pointer; cursor: hand;" data-id="' . $kval['id'] . '" class="removeFile fa fa-remove"></span>
                                        </div>' : '' )
                        . '<div class="img-doc"><a  target="blank" download href="' . $virCabPath . $kval['visible_name'] .
                        '" ><img src="' . $extImgArray[$typeext] . '" class="img-responsive"/></a></div>'
                        . '<div class="name-doc">' . $newImgName . '</div>'
                        . '</div> </li>';
            } else {
//                echo $typeext;
//                echo "<br>";
                $listHtml[$typeext] .= '<li class="litypes col-sm-2 mar-bot10">'
                        . '<div class="comn">' .
                        ($setDelPer ? '<div><span style="cursor: pointer; cursor: hand;" data-id="' . $kval['id'] . '" class="editPermission fa fa-send-o"></span> 
                                            <span style="cursor: pointer; cursor: hand;" data-id="' . $kval['id'] . '" class="removeFile fa fa-remove"></span>
                                        </div>' : '' )
                        . '<div class="img-doc"><a download href="' . $virCabPath . $kval['visible_name'] . '" class="html5lightbox">'
                        . '<img src="' . $extImgArray[$typeext] . '" class="img-responsive"/></a></div>'
                        . '<div class="name-doc">' . $newImgName . '</div>'
                        . '</div> </li>';
            }
        }
        if ($listHtml) {
            foreach ($listHtml as $key => $val) {
                $listingHtml .= '<div id="' . $key . '" class="portion clearfix" style="max-height: 220px; overflow: auto;border-bottom:1px solid #aaa"><ul class="list" style="list-style: none; margin: 0; padding: 0;">' . $val . '</ul></div>';
            }
        }
        return $listingHtml;
    }

}
