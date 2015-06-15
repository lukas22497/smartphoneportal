<?php 
// Wird ausgeführt um mit der Ausgabe des Headers zu warten. 
ob_start (); // Pufferung von Daten wird eingeschaltet
session_start (); //Starten/Fortführen einer bestehenden Session
session_unset (); //Aufheben der Variablen-Registrierung der akt. Session
session_destroy (); //Beenden der akt. Session, Löschen aller Sess.Daten
header ("Location: ../index.php?navi=20"); 
ob_end_flush (); // Leert den Ausgabepuffer, deaktiviert die Aus.pufferung
?>