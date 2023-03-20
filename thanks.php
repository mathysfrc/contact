<?php

echo 'Merci ' . $_POST ['user_name'] . ' de nous avoir contacter à propos de ' . $_POST ['subject'] . '.' . PHP_EOL;
echo 'Un de nos conseillers vous contactera soit à l’adresse : ' . $_POST ['user_email'] . ' ou par téléphone au : ' . $_POST ['phone'] . ' dans les plus brefs délais pour traiter votre demande :' . PHP_EOL;
echo $_POST ['user_message']; 
