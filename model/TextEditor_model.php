<?php
$mysqli = require ("../model/database/database.php");

function getBackground(){
    $patterns = [
      'pattern1' => "   
                          --s: 120px;
                          --_g: radial-gradient(#0000 70%, #1a2030 71%);
                          background:
                          var(--_g), var(--_g) calc(var(--s)/2) calc(var(--s)/2),
                          conic-gradient(#0f9177 25%, #fdebad 0 50%, #d34434 0 75%, #b5d999 0);
                          background-size: var(--s) var(--s);
                      ",
      'pattern2' => "   
      --r: 56px; /* control the size */
      --c1: #3FB8AF /*color 1*/ 99%,#0000 101%;
      --c2: #FF9E9D /*color 2*/ 99%,#0000 101%;
      
      --s:calc(var(--r)*.866);  /* .866 = cos(30deg) */
      --g0:radial-gradient(var(--r),var(--c1));
      --g1:radial-gradient(var(--r),var(--c2));
      --f:radial-gradient(var(--r) at calc(100% + var(--s)) 50%,var(--c1));
      --p:radial-gradient(var(--r) at 100% 50%,var(--c2));
      background:
        var(--f) 0 calc(-5*var(--r)/2),
        var(--f) calc(-2*var(--s)) calc(var(--r)/2),
        var(--p) 0 calc(-2*var(--r)),
        var(--g0) var(--s) calc(-5*var(--r)/2),
        var(--g1) var(--s) calc( 5*var(--r)/2),
        radial-gradient(var(--r) at 100% 100%,var(--c1)) 0 calc(-1*var(--r)),   
        radial-gradient(var(--r) at 0%   50% ,var(--c1)) 0 calc(-4*var(--r)),
        var(--g1) calc(-1*var(--s)) calc(-7*var(--r)/2),
        var(--g0) calc(-1*var(--s)) calc(-5*var(--r)/2),
        var(--p) calc(-2*var(--s)) var(--r),
        var(--g0) calc(-1*var(--s)) calc(var(--r)/ 2),
        var(--g1) calc(-1*var(--s)) calc(var(--r)/-2),
        var(--g0) 0 calc(-1*var(--r)),
        var(--g1) var(--s) calc(var(--r)/-2),
        var(--g0) var(--s) calc(var(--r)/ 2) 
        #FF9E9D; /*color 2 again here (yes I got lazy defining a variable ) */
      background-size: calc(4*var(--s)) calc(6*var(--r));
                      ",
      'pattern3' => "  --s: 74px; /* control the size */
      --b: 5px; /* control the thickness of the curved lines */
      
      --_r: calc(1.28*var(--s) + var(--b)/2) at top 50%;
      --_f: calc(99.5% - var(--b)),#F9F2E7 calc(101% - var(--b)) 99.5%,#0000 101%;
      --_g0: calc(-.8*var(--s)), #88A65E var(--_f);
      --_g1: calc(-.8*var(--s)), #BFB35A var(--_f);
      --_s: calc(1.8*var(--s) + var(--b));
      background: 
        radial-gradient(var(--_r) right var(--_g0)) calc(-1*var(--_s)) var(--s),
        radial-gradient(var(--_r) left  var(--_g1))         var(--_s)  calc(-1*var(--s)),
        radial-gradient(var(--_r) right var(--_g1)) calc(var(--_s)/-2) calc(-1*var(--s)),
        radial-gradient(var(--_r) left  var(--_g0)) calc(var(--_s)/ 2) var(--s),
        linear-gradient(90deg,#88A65E 50%,#BFB35A 0);
      background-size: var(--_s) calc(4*var(--s));",
      'pattern4' => "--s: 60px; /* control the size */
      --c1: #F2B4A8;
      --c2: #91204D;
      
      --_g: radial-gradient(25% 25% at 25% 25%,var(--c1) 99%,#0000 101%);
      background:
       var(--_g) var(--s) var(--s)/calc(2*var(--s)) calc(2*var(--s)),
       var(--_g) 0 0/calc(2*var(--s)) calc(2*var(--s)),
       radial-gradient(50% 50%,var(--c2) 98%,#0000) 0 0/var(--s) var(--s),
       repeating-conic-gradient(var(--c2) 0 25%,var(--c1) 0 50%) 
         calc(.5*var(--s)) 0/calc(2*var(--s)) var(--s); ",
      'pattern5' => "--_g: #036564 35%, #0000 36%;
      background: 
          radial-gradient(at 100% 100%, var(--_g)),
          radial-gradient(at 0    0   , var(--_g))
        #E8DDCB;
      background-size: 6em 6em;
      /* 35% = 100%/(2*sqrt(2)) */",
      'pattern6' => "    --s: 200px; /* control the size */
      --c: #fff; /* first color */
      
      --_g: #0000 8%,var(--c) 0 17%,#0000 0 58%;
      background: 
        linear-gradient(135deg,#0000 20.5%,var(--c) 0 29.5%,#0000 0) 0 calc(var(--s)/4),
        linear-gradient( 45deg,var(--_g)) calc(var(--s)/2) 0,
        linear-gradient(135deg,var(--_g),var(--c) 0 67%,#0000 0),        
        linear-gradient( 45deg,var(--_g),var(--c) 0 67%,#0000 0 83%,var(--c) 0 92%,#0000 0),
        #1095c1; /* second color */
      background-size: var(--s) var(--s);",
      'pattern7' => "--s: 120px; /* control the size */
    
      --_g: #0000 90deg,#046D8B 0;
      background:
        conic-gradient(from 116.56deg at calc(100%/3) 0   ,var(--_g)),
        conic-gradient(from -63.44deg at calc(200%/3) 100%,var(--_g))
        #2FB8AC;
      background-size: var(--s) var(--s);",
      'pattern8' => "--s: 120px; /* control the size */
    
      --_g: #0000 83%,#b09f79 85% 99%,#0000 101%;
      background:
        radial-gradient(27% 29% at right ,var(--_g)) calc(var(--s)/ 2) var(--s),
        radial-gradient(27% 29% at left  ,var(--_g)) calc(var(--s)/-2) var(--s),
        radial-gradient(29% 27% at top   ,var(--_g)) 0 calc(var(--s)/ 2),
        radial-gradient(29% 27% at bottom,var(--_g)) 0 calc(var(--s)/-2)
        #476074;
      background-size: calc(2*var(--s)) calc(2*var(--s));",
      'pattern9' => "    --u:  2vmin;	
      --c1: #83b0e3;
      --c2: #6c91bb;
      --c3: #4d6887;
      --gp: 50%/calc(var(--u) * 5) calc(var(--u) * 10);
      --bp: calc(var(--u) * -2.5) calc(var(--u) * -5);
      --bg: 
        radial-gradient(circle at 50% 25%, var(--c2)  15%, #fff0 30% 100%) var(--gp),
        conic-gradient(from 270deg at 34% 46%, var(--c2) 0 12.5%, #fff0 0 100%) var(--gp),
        conic-gradient(from 45deg at 66% 46%, var(--c2) 0 12.5%, #fff0 0 100%) var(--gp),
        conic-gradient(from 180deg at 50% 80%, var(--c2) 0 12.5%, #fff0 0 100%) var(--gp),
        conic-gradient(from 135deg at 50% 80%, var(--c2) 0 12.5%, #fff0 0 100%) var(--gp),
        conic-gradient(from 0deg at 0% 20%, var(--c2) 0 12.5%, #fff0 0 100%) var(--gp),
        conic-gradient(from -45deg at 100% 20%, var(--c2) 0 12.5%, #fff0 0 100%) var(--gp),
        linear-gradient(180deg, var(--c2) 0 4.5%, #fff0 0 45.25%, var(--c2) 0 50%, #fff0 0% 100%) var(--gp),
        radial-gradient(circle at 50% 25%, #fff0 0 25%, var(--c2) 26% 32%, #fff0 0 100%) var(--gp),
        linear-gradient(165deg, var(--c3) 15%, var(--c1) 44%, #fff0 0 100%) var(--gp),
        linear-gradient(180deg, var(--c1) 50%, #fff0 0 100%) var(--gp);
      background: 
        var(--bg), 
        var(--bg);
      background-position: 
        var(--bp), var(--bp), var(--bp), var(--bp), var(--bp), var(--bp), var(--bp), var(--bp), var(--bp), var(--bp), var(--bp), 
        0 0, 0 0, 0 0, 0 0, 0 0, 0 0, 0 0, 0 0, 0 0, 0 0, 0 0;",
      'pattern10' => "background-color: #d3d3e4;
      opacity: 1;
      background: repeating-linear-gradient( 45deg, #783ca9, #783ca9 10px, #d3d3e4 10px, #d3d3e4 50px );",
      'pattern11' => "--u: 2vmin; /* change size */
      --c1: #673ab7;
    --c2: #5c379f;
      --s1: #0002;
    --gp: 50%/calc(var(--u) * 10) calc(var(--u) * 10);
      background: 
          repeating-conic-gradient(from 0deg at 50% 13.75%, var(--s1) 0 20.55%, #fff0 21.05% 79.13%, var(--s1) 79.63% 100% ) var(--gp), 
          repeating-conic-gradient(from 0deg at 50% 50%, #fff0 0 25%, var(--s1) 25% 29%, #fff0 30% 70%, var(--s1) 71% 75%, #fff0 75% 100%) var(--gp), 
          repeating-conic-gradient(from 0deg at 50% 50%, var(--c1) 0 25%, var(--c2) 0% 50%, var(--c1) 0 75%, var(--c2) 0% 100% ) var(--gp);",
      'pattern12' => "background-size: 120;
      transform: rotate(deg);
      background-image: 
        conic-gradient(from 160deg at 70px 168.5px, #FDC12D 0deg 90deg, transparent 90deg),
        conic-gradient(from 21deg at 168px 71px, #FDC12D 0deg 90deg, transparent 90deg),
        conic-gradient(from 21deg at 141px 141px, #FEEBAE 0deg 114deg, transparent 114deg),
        conic-gradient(from -21deg at 96.5px 44px, #1483CA 0deg 131.5deg, transparent 131.5deg), 
        conic-gradient(from -70deg at 43.5px 97px, #FDC12D 0deg 115.5deg, transparent 115.5deg), 
        conic-gradient(from 134.5deg at 141px 141px, #1483CA 0deg 114.5deg, transparent 114deg),
        conic-gradient(from 160deg at 43.5px 97px, #FEEBAE 0deg 130.5deg, transparent 120deg 360deg);
      background-color: skyblue;
      background-size: 195px 195px;
      background-position: -30px -30px;
      background-repeat: repeat, repeat;",
      'pattern13' => "  --s: 120px; /* control the size */
      --c1: #F8B195;
      --c2: #355C7D;
      
      --_g: 
         var(--c2) 6%  14%,var(--c1) 16% 24%,var(--c2) 26% 34%,var(--c1) 36% 44%,
         var(--c2) 46% 54%,var(--c1) 56% 64%,var(--c2) 66% 74%,var(--c1) 76% 84%,var(--c2) 86% 94%;
      background:
        radial-gradient(100% 100% at 100% 0,var(--c1) 4%,var(--_g),#0008 96%,#0000),
        radial-gradient(100% 100% at 0 100%,#0000, #0008 4%,var(--_g),var(--c1) 96%)
        var(--c1);
      background-size: var(--s) var(--s);",
      'pattern14' => 'background: linear-gradient(60deg, #abecd6 25%, #fbed96 25%, #fbed96 50%, #abecd6 50%, #abecd6 75%, #fbed96 75%, #fbed96)'
  ];
  
  $randomPattern = 'pattern' . rand(1,14);
  
  $patternName = $_GET['pattern'] ?? $randomPattern;
  // $memoryTitle = $_GET['text'] ?? 'none';
  
  $backgroundStyle = $patterns[$patternName] ?? $patterns['pattern14'];

  $backgroundInformation = array(
      $patternName,
      $backgroundStyle
  );

  return $backgroundInformation;
  }

function insertMemory()
{
    global $mysqli;
    $title = $_POST['title'];
    $text = $_POST['text'];
    $data = date('Y-m-d H:i:s');
    $user_id = 2; //need to figure out how to get the user_id
    $pattern = $_POST['pattern'];
    $sql = "INSERT INTO memories (user_id, creation_date, title, text, pattern) VALUES (?,?,?,?,?)"; //we insert the photos as well
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $user_id, $data, $title, $text, $pattern);
    try {
        $stmt->execute();
        // header("Location: ../controller/Journal.php");
    } catch (Exception $e) {
        die($e->getMessage() . " " . $e->getCode());
    }

    $dom = new DOMDocument;
    @$dom->loadHTML($text);

    $imgs = $dom->getElementsByTagName('img');
    $srcs = array();

    foreach ($imgs as $img) {
        $srcs[] = $img->getAttribute('src');
    }

    foreach ($srcs as $src) {
        $last_id = mysqli_insert_id($mysqli);
        $sql = "INSERT INTO images_paths (memory_id, path) VALUES (?,?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $last_id, $src);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage() . " " . $e->getCode());
        }
    }

    header("Location: ../controller/Journal.php");
}

function deleteMemory($id){
    global $mysqli;
    $sql = "DELETE FROM memories WHERE id = " . $id;
    $mysqli->query($sql);

    header("Location: ../controller/Journal.php");
}

if (isset($_GET['function'])) {
    $functionToCall = $_GET['function'];
    if (function_exists($functionToCall)) {
        if(isset($_POST['memoryId'])){
            $param = $_POST['memoryId'];
            echo $functionToCall($param);
        }else{
            echo $functionToCall();
        }
    } else {
        echo json_encode(array("error" => "Invalid function specified"));
    }
} else {
    // echo json_encode(array("error" => "No function specified"));
}
