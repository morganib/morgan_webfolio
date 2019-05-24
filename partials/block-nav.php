<input type="checkbox" id="display-menu" />
<label class="label-menu" for="display-menu">
  <span></span>
  <span></span>
  <span></span>
  <p>Menu</p>
</label>
<nav class="menu">
    <ul>
          <li>
            <a href="index.php">Who am i ?</a>
          </li>

          <li>
            <a href="mywork.php" title="mywork"<?php echo($active == "mywork" ? "class='active'" : ""); ?>>my work</a>
          </li>

          <li>
             <a href="contact.php" title="contact"<?php echo($active == "mywork" ? "class='active'" : ""); ?>>Contact</a>
          </li>
   </ul>
</nav>
