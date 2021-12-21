<?php 

    include "Model/sinhvien/student.php";

    $svModel = new Student();

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = "";
    }

    switch ($action) {
        case 'add':
            if(isset($_POST['add_sv'])){
                $data = array();
                $data['hoten'] = $_POST['hoten'];
                $data['namsinh'] = $_POST['namsinh'];
                $data['quequan'] = $_POST['quequan'];
                if($svModel->insert($data)){
                    $message = "Thành công";
                }
            }
            require_once('View/sinhvien/add_sv.php');
            break;
        case 'update':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $data = $svModel->getData($id);
            }
            if(isset($_POST['edit_sv'])){
                $data = array();
                $data['hoten'] = $_POST['hoten'];
                $data['namsinh'] = $_POST['namsinh'];
                $data['quequan'] = $_POST['quequan'];
                if($svModel->update($data,$id)){
                    $message = "Thành công";
                }
            }
            require_once('View/sinhvien/edit_sv.php');
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                if($svModel->delete($id)){
                    header('location: index.php?controller=sinh-vien');
                }
            }
            break;
        case 'search':
            if(isset($_GET['keyword'])){
                $keyword = $_GET['keyword'];
            }
            $data = $svModel->getList($keyword);
            require_once("View/sinhvien/list_sv.php");
            break;
        default:
            $keyword = "";
            $data = $svModel->getList($keyword);
            require_once("View/sinhvien/list_sv.php");
            break;
    }
