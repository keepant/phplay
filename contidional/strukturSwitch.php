<html>
<body>
<h1> Demo switch</h1>
    <?
        $nohari=2;
        echo "No. hari : $nohari adalah hari :";
        switch ($nohari) {
            case 1:
                echo "minggu";
                break;
            case 2:
                echo "senin";
                break;
            case 3:
                echo "selasa";
                break;
            case 4:
                echo "rabu";
                break;
            case 5:
                echo "kamis";
                break;
            case 6:
                echo "jumat";
                break;
            case 7:
                echo "sabtu";
                break; 
        }
    ?>
</body>
</html> 