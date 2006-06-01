<?php
/***************************************************************************
 *                            lang_main_attach.php [Greek]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/02/19 18:36:29 bob Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// translated by Theodoros Vilaras
//

//
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = '<b>Μπορείτε</b> να επισυνάψετε αρχεία σε αυτό το forum';
$lang['Rules_attach_cannot'] = '<b>Δεν μπορείτε</b> να επισυνάψετε αρχεία σε αυτό το forum';
$lang['Rules_download_can'] = '<b>Μπορείτε</b> να κατεβάσετε αρχεία από αυτό το forum';
$lang['Rules_download_cannot'] = '<b>Δεν μπορείτε</b> να κατεβάσετε αρχεία από αυτό το forum';
$lang['Sorry_auth_view_attach'] = 'Λυπούμαστε αλλά δεν έχετε εξουσιοδοτηθεί να δείτε ή να κατεβάσετε αυτό το συνημμένο αρχείο';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Περιγραφή'; // used in Administration Panel too...
$lang['Downloaded'] = 'Ανοίχθηκε';
$lang['Download'] = 'Ανοιγμα'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Μέγεθος Αρχείου';
$lang['Viewed'] = 'Ειδώθηκε';
$lang['Download_number'] = '%d φορά(ές)'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Η κατάληξη \'%s\' έχει απενεργοποιηθεί από τον διαχειριστή του forum και ως εκ τούτου αυτό το συνημμένο αρχείο δεν εμφανίζεται.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Πίνακας ελέγχου Επισύναψης αρχείων';
$lang['Attach_posting_cp_explain'] = 'Εάν επιλέξετε το Επισύναψη Αρχείου, θα εμφανισθεί το πλαίσιο για την Επισύναψη Αρχείων.<br />Εάν επιλέξετε το Αναρτημένα Αρχεία, θα δείτε μια λίστα των ήδη συνημμένων αρχείων και θα έχετε την δυνατότητα να τα τροποποιήσετε.<br />Εάν θέλετε να αντικαταστήσετε ένα συνημμένο αρχείο (να ανεβάσετε νεότερη έκδοσή του) θα πρέπει να χρησιμοποιήσετε και τους δύο συνδέσμους. Προσθέστε το όπως θα κάνατε συνήθως και στη συνέχεια, αντί να κάνετε κλικ στο Προσθήκη Αρχείου, κάντε κλικ στο Ανέβασμα Νέας Έκδοσης στο συνημμένο αρχείο που θέλετε να ανανεώσετε.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Προσθήκη Αρχείου';
$lang['Add_attachment_title'] = 'Επισύναψη Αρχείου';
$lang['Add_attachment_explain'] = 'Εάν δεν θέλετε να επισυνάψετε αρχείο στο μήνυμά σας, παρακαλούμε αφήστε αυτό το πεδίο κενό';
$lang['File_name'] = 'Όνομα Αρχείου';
$lang['File_comment'] = 'Σχόλιο Αρχείου';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Αναρτημένα Αρχεία';
$lang['Options'] = 'Επιλογές';
$lang['Update_comment'] = 'Ανανέωση σχολίου';
$lang['Delete_attachments'] = 'Διαγραφή Αρχείων';
$lang['Delete_attachment'] = 'Διαγραφή Αρχείου';
$lang['Delete_thumbnail'] = 'Διαγραφή Εικονιδίου';
$lang['Upload_new_version'] = 'Ανέβασμα Νέας Έκδοσης';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = 'το %s δεν είναι έγκυρο όνομα αρχείου'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Το αρχείο είναι πολύ μεγάλο.<br />Δεν ήταν δυνατόν να γίνει η λήψη του ανώτατου ορίου που ορίζεται στο PHP.<br />Το Attachment Mod δεν μπορεί να βρει το ανώτατο επιτρεπόμενο μέγεθος για Ανέβασμα αρχείων που ορίζεται στο php.ini.';
$lang['Attachment_php_size_overrun'] = 'Το αρχείο είναι πολύ μεγάλο.<br />Ανώτατο επιτρεπόμενο μέγεθος: %d MB.<br />Θα πρέπει να γνωρίζετε ότι αυτό το όριο καθορίζεται στο php.ini, και αυτό σημαίνει ότι είναι ρυθμισμένο από το PHP και το Attachment Mod δεν μπορεί να υπερβεί αυτή την τιμή.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Η κατάληξη %s δεν επιτρέπεται'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'Δεν επιτρέπεται να ανεβάζετε Αρχεία με την κατάληξη %s σε αυτό το Υπο-Forum'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Το αρχείο είναι πολύ μεγάλο.<br />Ανώτατο επιτρεπόμενο μέγεθος: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Λυπούμαστε, αλλά έχετε φτάσει στο ανώτατο συνολικό όριο μεγέθους των συνημμένων αρχείων. Παρακαλούμε επικοινωνήστε με τον διαχειριστή του forum εάν έχετε κάποια ερωτήματα.';
$lang['Too_many_attachments'] = 'Δεν ήταν δυνατή η προσθήκη του αρχείου καθώς έχετε φτάσει στον ανώτατο αριθμό των %d συνημμένων αρχείων σε αυτό το μήνυμα.'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Το συνημμένο αρχείο/εικόνα πρέπει να πρέπει να είναι μικρότερο από %d pixels σε πλάτος και %d pixels σε ύψος'; 
$lang['General_upload_error'] = 'Σφάλμα ανάρτησης: Δεν ήταν δυνατή η ανάρτηση του αρχείου στο %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'πρέπει να συμπληρώσετε τα στοιχεία στο πλαίσιο \'Επισύναψη Αρχείου\' ';
$lang['Error_missing_old_entry'] = 'Δεν ήταν δυνατή η ανανέωση του αρχείου, δεν βρέθηκε το παλαιό αρχείο';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Λυπούμαστε, αλλά έχετε φτάσει στο ανώτατο συνολικό όριο μεγέθους των συνημμένων αρχείων για τον φάκελλο των Προσωπικών σας Μηνυμάτων. Παρακαλούμε διαγράψτε μερικά από τα ληφθέντα ή απεσταλθέντα συνημμένα αρχεία.';
$lang['Attach_quota_receiver_pm_reached'] = 'Λυπούμαστε, αλλά ο χρήστης \'%s\' έχει φτάσει στο ανώτατο συνολικό όριο μεγέθους των συνημμένων αρχείων για τον φάκελλο των Προσωπικών του Μηνυμάτων. Παρακαλούμε ενημερώστε τον σχετικά, ή περιμένετε έως ότου διαγράψει μερικά από τα ληφθέντα ή απεσταλθέντα συνημμένα αρχεία του.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Δεν έχετε επιλέξει κάποιο αρχείο για να δείτε ή να κατεβάσετε.';
$lang['Error_no_attachment'] = 'Το αρχείο που επιλέξατε δεν υπάρχει πια';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε τα επιλεγμένα αρχεία;';
$lang['Deleted_attachments'] = 'Τα επιλεγμένα αρχεία έχουν διαγραφεί.';
$lang['Error_deleted_attachments'] = 'Δεν ήταν δυνατή η διαγραφή των αρχείων.';
$lang['Confirm_delete_pm_attachments'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε όλα τα συνημμένα αρχεία αυτού του μηνύματος;';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Η δυνατότητα αποστολής συνημμένων είναι απενεργοποιημένη.';

$lang['Directory_does_not_exist'] = 'Ο φάκελος \'%s\' δεν υπάρχει ή δεν βρέθηκε.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Please check if \'%s\' is a directory.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Directory \'%s\' is not writeable. You\'ll have to create the upload path and chmod it to 777 (or change the owner to you httpd-servers owner) to upload files.<br />If you have only plain ftp-access change the \'Attribute\' of the directory to rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Δεν ήταν δυνατή η σύνδεση στον FTP Server: \'%s\'. Παρακαλούμε ελέγξτε τις ρυθμίσεις σας για το FTP.';
$lang['Ftp_error_login'] = 'Δεν ήταν δυνατή η σύνδεση (login) στον FTP Server. Το όνομα χρήστη \'%s\' ή ο κωδικός είναι λανθασμένο. Παρακαλούμε ελέγξτε τις ρυθμίσεις σας για το FTP.';
$lang['Ftp_error_path'] = 'Δεν είναι δυνατή η πρόσβαση (access) στον φάκελο ftp: \'%s\'. Παρακαλούμε ελέγξτε τις ρυθμίσεις σας για το FTP.';
$lang['Ftp_error_upload'] = 'Δεν ήταν δυνατό το ανέβασμα (upload) των αρχείων στον φάκελο ftp: \'%s\'. Παρακαλούμε ελέγξτε τις ρυθμίσεις σας για το FTP.';
$lang['Ftp_error_delete'] = 'Δεν ήταν δυνατή η διαγραφή των αρχείων στον φάκελο ftp: \'%s\'. Παρακαλούμε ελέγξτε τις ρυθμίσεις σας για το FTP.<br /> ’λλη μια αιτία γι\' αυτό το μήνυμα θα μπορούσε να είναι η απουσία συνημμένων αρχείων, παρακαλούμε ελέγξτε πρώτα αυτό στα σκιώδη συνημμένα αρχεία.';
$lang['Ftp_error_pasv_mode'] = 'Αδυναμία ενεργοποίησης/απενεργοποίησης της λειτουργίας FTP (FTP Passive Mode)';

// Attach Rules Window
$lang['Rules_page'] = 'Κανόνες Επισύναψης';
$lang['Attach_rules_title'] = 'Επιτρεπόμενες Ομάδες Καταλήξεων και τα μεγέθη τους';
$lang['Group_rule_header'] = '%s -> Μέγιστο Μέγεθος για Ανέβασμα: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Επιτρεπόμενες Καταλήξεις και Μεγέθη';
$lang['Note_user_empty_group_permissions'] = 'ΣΗΜΕΙΩΣΗ:<br />Κανονικά επιτρέπεται να επισυνάπτετε αρχεία σε αυτό το Forum, <br />αλλά από τη στιγμή που δεν επιτρέπεται καμμία Ομάδα Καταλήξεων να χρησιμοποιηθεί για επισύναψη εδώ, <br />δεν έχετε την δυνατότητα να επισυνάψετε οτιδήποτε. Εάν προσπαθήσετε, <br />θα λάβετε Μήνυμα Λάθους.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Ενημέρωση για το Ανέβασμα Αρχείων';
$lang['Pm_quota'] = 'Ενημέρωση για τα Προσωπικά Μηνύματα (PM)';
$lang['User_upload_quota_reached'] = 'Λυπούμαστε, έχετε φτάσει στο ανώτατο όριο των %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Πίν. Ελέγ. Συνημ. Χρήστη';
$lang['UACP'] = 'Πίνακας Ελέγχου Επισύναψης Χρήστη';
$lang['User_uploaded_profile'] = 'Ανεβασμένα: %s';
$lang['User_quota_profile'] = 'Όριο: %s';
$lang['Upload_percent_profile'] = '%d%% επί του συνόλου';

// Common Variables
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Αναζήτηση Συνημμένων Αρχείων';
$lang['Test_settings'] = 'Δοκιμή Ρυθμίσεων';
$lang['Not_assigned'] = 'Δεν ορίσθηκε (Not Assigned)';
$lang['No_file_comment_available'] = 'Δεν υπάρχει σχόλιο αρχείου';
$lang['Attachbox_limit'] = 'Ο χώρος σας για επισύναψη αρχείων είναι %d%% γεμάτος';
$lang['No_quota_limit'] = 'Δεν υπάρχει όριο επισύναψης';
$lang['Unlimited'] = 'Απεριόριστο';

?>