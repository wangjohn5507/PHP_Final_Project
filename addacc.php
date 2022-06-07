<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>創建小水獺帳號</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  

<link href="https://fonts.googleapis.com/css?family=Margarine|Rubik:400,500" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">

</head>
<body>
  
  
<!-- partial:index.partial.html -->
<!-- https://dribbble.com/shots/4755212-Password-Guide-->
<!-- Concept by Saptarshi Prakash - https://dribbble.com/saptarshipr-->
<div class="setPw">
  <p style="padding-left: 80px"><font size="6" face="Margarine">Create Account</font></p><br>
  <div class="pwGuide">
    <div class="pwList">
      <ul>
        <li><span id="pwChar"><font size="4.5">建議至少包含7個字母</span></li>
        <li><span id="pwLower">建議至少包含1個小寫字母</span></li>
        <li><span id="pwCap">建議至少包含1個大寫字母</span></li>
        <li><span id="pwNum">建議至少包含1個數字</span></li>
      </ul>
    </div>
    <svg class="pwCheck" width="32" height="33" viewbox="0 0 32 33">
      <circle cx="16.1886" cy="16.6948" r="15.7492" fill="#70D5B9"></circle>
      <path d="M10.5639 16.4698L14.3887 20.7446L22.7133 12.645" stroke="white" stroke-width="2.69986"></path>
    </svg>
    <svg width="400" height="300" viewbox="0 0 225 160" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M74.3499 1.61518C116.925 -6.45707 134.575 17.6849 138.078 30.765C143.295 42.3501 136.065 80.2503 137.631 113.057C139.867 159.921 117.282 159.024 107.444 159.921C97.605 160.818 41.4799 154.091 22.6969 139.292C7.67061 127.453 -8.81015 78.4076 5.47931 45.3399C14.1999 25.1592 31.7753 9.68743 74.3499 1.61518Z" fill="#3A296A"></path>
      <path d="M21.6109 83.1567L20.9714 79.1187C20.2749 74.7216 23.275 70.5924 27.6722 69.8959V69.8959C32.0119 69.2086 36.1027 72.1232 36.8703 76.4495L37.6107 80.6226" stroke="#A59FC9" stroke-width="5.39972"></path>
      <rect x="14.4999" y="84.283" width="30.5984" height="28.3486" rx="3.59982" transform="rotate(-9 14.4999 84.283)" fill="#BE337A"></rect>
      <rect x="14.4999" y="84.283" width="30.5984" height="20.249" rx="3.59982" transform="rotate(-9 14.4999 84.283)" fill="#E3488B"></rect>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M34.3401 100.243C35.3055 99.4602 35.8385 98.1979 35.63 96.8819C35.319 94.9182 33.475 93.5785 31.5114 93.8895C29.5478 94.2005 28.208 96.0445 28.519 98.0081C28.7275 99.3242 29.6245 100.36 30.7846 100.806L31.2823 103.949C31.4378 104.93 32.3598 105.6 33.3416 105.445C34.3234 105.289 34.9933 104.367 34.8378 103.386L34.3401 100.243Z" fill="#3A296A"></path>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M45.4836 25.9488C42.0049 25.8881 39.1357 28.6589 39.075 32.1376L37.4494 125.269C37.3886 128.747 40.1594 131.617 43.6381 131.677L48.6056 131.764C48.596 131.615 48.5923 131.465 48.595 131.314C48.647 128.332 51.1064 125.957 54.0881 126.009C57.0698 126.061 59.4448 128.521 59.3928 131.502C59.3901 131.654 59.3813 131.804 59.3664 131.952L216.403 134.693C219.882 134.754 222.751 131.983 222.812 128.504L224.437 35.3731C224.498 31.8944 221.727 29.0252 218.248 28.9645L45.4836 25.9488ZM54.9048 79.2187C57.8866 79.2707 60.3459 76.8957 60.398 73.914C60.45 70.9323 58.0751 68.4729 55.0933 68.4209C52.1116 68.3688 49.6522 70.7438 49.6002 73.7255C49.5481 76.7073 51.9231 79.1666 54.9048 79.2187ZM59.8954 102.708C59.8433 105.69 57.384 108.065 54.4022 108.013C51.4205 107.961 49.0455 105.501 49.0976 102.52C49.1496 99.538 51.609 97.163 54.5907 97.215C57.5724 97.2671 59.9474 99.7264 59.8954 102.708Z" fill="#F6BD41"></path>
    </svg>
  </div>
  <div class="pwSign">
    <form action="addaccount.php" id="pwSignup" method="post">
      <div class="inp1-account">
      <input class="inp1" id="account" type="text" name="id" placeholder="Account"/>
    </div>
      <div class="inp-password">
      <input class="inp" id="password" type="password" name="pwd" placeholder="Password"/>
      <div class="hide" id="showPW"></div><br><br><br>

      </div>
      
<div class="item button-jittery" style="--bg-color: #f1c40f;">
    <button type="submit">Create!</button>
    <!-- <div class="name">Subtlety</div> -->
  </div>
      <!-- <div class="name">Subtlety</div> -->
  </div>

     
    <!--   <figure>
      <div>
       <span class="face">Submit</span>
       <span class="face">Yes</span>
      </div>
      </figure> -->
    

  </form>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>