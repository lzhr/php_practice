<?php ini_set("error_reporting","E_ALL & ~E_NOTICE");
$expression='hello';
if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?> 

<?php for ($i = 0; $i < 5; ++$i): ?>
<p>Hello, there!
<?php endfor; ?>

1.  <?php echo 'if you want to serve XHTML or XML documents, do it like this','</br>'; ?>

2.  <script language="php">
        echo 'some editors (like FrontPage) don\'t
              like processing instructions','</br>';
    </script>

3.	<? echo 'this is the simplest, an SGML processing instruction'; ?>
    <?= expression ?> This is a shortcut for "<? echo expression ?>"


4.  <% echo 'You may optionally use ASP-style tags'; 
		$variable=1;
	%>
    <%= $variable; # This is a shortcut for "<% echo . . ." 
	%> 