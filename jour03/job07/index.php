<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformations de Texte</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        <br>
        <label for="fonction">Transformation :</label>
        <select id="fonction" name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];
        
        function gras($str) {
            return preg_replace('/\b([A-Z][a-z]*)\b/', '<strong>$1</strong>', $str);
        }

        function cesar($str, $decalage = 2) {
            $result = '';
            $length = strlen($str);

            for ($i = 0; $i < $length; $i++) {
                $char = $str[$i];
                if (ctype_alpha($char)) {
                    $ascii = ord($char);
                    $is_upper = ctype_upper($char);
                    $offset = $is_upper ? ord('A') : ord('a');
                    $result .= chr((($ascii + $decalage - $offset) % 26) + $offset);
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        function plateforme($str) {
            return preg_replace('/\b(\w+me)\b/', '$1_', $str);
        }

        switch ($fonction) {
            case 'gras':
                echo gras($str);
                break;
            case 'cesar':
                echo cesar($str);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
        }
    }
    ?>
</body>
</html>
