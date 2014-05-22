<?
session_start();
function menu()
{
    $login = $_SESSION['login'];
    $password = $_SESSION['password'];
    $permission = $_SESSION['permission'];

    if (empty($login) && empty($password)) {
        print <<<HERE
            <div id="menu-wrapper">
			<div id="menu" class="menu">
				<ul id="tiny">
					<li class="active"><a href="index.php">Проекти</a></li>
					<li><a href="#">FAQ</a>
						<ul>
							<li><a href="about.html">Про сервіс</a></li>
							<li><a href="page.html">Як це працює</a></li>
						</ul>
					</li>
					<li><a href="#">Ввійти на сайт</a>
						<ul>
							<li><a href="login.php">Вхід</a></li>
							<li><a href="registration.php">Реєстрація</a></li>
						</ul>
					</li>
					<li><a href="contacts.html">Контакти</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
HERE;
    } elseif (!empty($login) && !empty($password)) {
        print <<<HERE
            <div id="menu-wrapper">
			<div id="menu" class="menu">
				<ul id="tiny">
					<li class="active"><a href="index.php">Проекти</a></li>
					<li><a href="#">FAQ</a>
						<ul>
							<li><a href="about.html">Про сервіс</a></li>
							<li><a href="page.html">Як це працює</a></li>
						</ul>
					</li>
HERE;
        if ($permission == "admin") {
            print "<li><a href='#'>$login</a>";
            print <<<HERE
                <ul>
							<li><a href="add-post.php">Додати проект</a></li>
                            <li><a href="add-advertising.php">Додати рекламу</a></li>
							<li><a href="all-post.php">Переглянути мої проекти</a></li>
HERE;
        } elseif ($permission == "user") {
            print "<li><a href='#'>$login</a>";
            print <<<HERE
                <ul>
							<li><a href="add-post.php">Додати проект</a></li>
							<li><a href="all-post.php">Переглянути мої проекти</a></li>
HERE;
        }
        print <<<HERE
            <li><a href="php/logging/exit.php">Вийти</a></li>
						</ul>
					</li>
					<li><a href="contacts.html">Контакти</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
HERE;
    }
}