<?php

function admin_import() {

  if (isset($_REQUEST['upload'])) {
    $ok = true;
    $file = $_FILES['csv_file']['tmp_name'];
    $handle = fopen($file, "r");
    if ($file == NULL) {
      error(_('Please select a file to import'));
      redirect(page_link_to('admin_export'));
    }
    else {
      while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
          $Subject = $filesop[0];
          $Held = $filesop[1];
          $Attend = $filesop[2];
          $%= $filesop[3];
          
// example error handling. We can add more as required for the database.

        
// error handling for password        
 // If the tests pass we can insert it into the database.       
        if ($ok) {
          $sql = sql_query("
            INSERT INTO `attend` SET
            `Subject`='" . sql_escape($subject) . "',
            `Held`='" . sql_escape($Held) . "',
            `Attend`='" . sql_escape($Attend) . "',
            `%`='" . sql_escape($%) . "',
            `Age`='" . sql_escape($age) . "',
            
        }
      }

      if ($sql) {
        success(_("You database has imported successfully!"));
        redirect(page_link_to('admin_export'));
      } else {
        error(_('Sorry! There is some problem in the import file.'));
        redirect(page_link_to('admin_export'));
        }
    }
  }
//form_submit($name, $label) Renders the submit button of a form
//form_file($name, $label) Renders a form file box

 return page_with_title("Import Data", array(
   msg(),
  div('row', array(
          div('col-md-12', array(
              form(array(
                form_file('csv_file', _("Import user data from a csv file")),
                form_submit('upload', _("Import"))
              ))
          ))
      ))
  ));
}
?>
