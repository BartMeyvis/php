<header>
   <ul>
    <li  ><a <?php if(basename($_SERVER['PHP_SELF']) == "page1.php")
{ echo "class='active'";}; ?>href="page1.php">Page 1</a></li>
    <li ><a <?php if(basename($_SERVER['PHP_SELF']) == "page2.php")
{ echo "class='active'";}; ?>href="page2.php">Page 2</a></li>
    <li ><a <?php if(basename($_SERVER['PHP_SELF']) == "page3.php")
{ echo "class='active'";}; ?>href="page3.php">Page 3</a></li>
   </ul>
    
</header>