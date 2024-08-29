    <header>
        <nav>           
            <ul>
                <li><a href="?url=main"> <img src="images/logo.svg" alt="Logo" class="logo"></a></li>
                <li><a href="?url=main">Главная</a></li>
                <li><a href="?url=about">О нас</a></li>
                <li><a href="?url=gallery">Галерея</a></li>
                <li><a href="?url=contacts">Контакты</a></li>
				<li><a href="?url=portfolio">Портфолио</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Портфолио</h1>
		<p>
		<table>
			<caption align="center">
				Информация о проектах компании
			</caption>
		<tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
		<?php
		
			foreach($data as $row)
			{
				echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
			}
			
		?>
		</table>
		</p>
    </main>
    <footer>
        <p>&copy;Mobi</p>
    </footer>