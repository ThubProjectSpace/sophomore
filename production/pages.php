<?php

    @$page = $_GET['pages'];

    switch ($page) {
    case 'addcert':
        include "certificates.php";
        break;
    case 'viewcert':
        include "tables.php";
        break;
    case 'attendance':
        include "attendance.php";
        break;
    case 'reg_form':
        include "form_validation.php";
        break;
    case 'change_pswd':
        include "change_pswd.php";
        break;
    case 'int_marks':
        include "form_buttons.html";
    case 'view_marks':
        include "new_marks.php";
        break;
        //admin panel
        case 'addstud':
        include "addstud.php";
        break;
        case 'viewstud':
        include "viewstud.php";
        break;   
        case 'imp':
        include "att_import.php";
        break;
        case 'import':
        include "import.php";
        break; 
        case 'viewatt':
        include "viewatt.php";
        break;    
        case 'internal_post':
        include "form_internal_upload.php";
        break;
        case 'internal':
        include "interimport.php";
        break;    
        case 'viewintern':
        include "viewinternal.php";
        break;    
        case 'neno':
        include "adminnews.php";
        break;     
        case 'viewneno':
        include "viewneno.php";
        break; 
        case 'news_update':
            include "newsupdate.php";
            break;       
        case 'news_delete':
            include "news_delete.php";
            break;       
        
        case 'logout':
            include "logout.php";
            break;
     default:
        //include "default.php";
}
?>