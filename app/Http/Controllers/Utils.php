<?php
function getInitials($title) {
    // Diviser la chaîne en mots
    $words = explode(' ', $title);

    // Récupérer les premières lettres des deux premiers mots
    $initials = strtoupper(substr($words[0], 0, 1)); // Première lettre du premier mot
    if (count($words) > 1) {
        $initials .= strtoupper(substr($words[1], 0, 1)); // Première lettre du deuxième mot (si existe)
    }

    return $initials;
}

?>
