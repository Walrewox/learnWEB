<?php  $urls = ['assets/img/photos/Linus.jpg',
                'assets/img/photos/Chris.jpg',
                'assets/img/photos/Jim.jpg'];
       $i = rand(0,2);
       if ($i==0) {
         echo "<p class=\"T-center\"><img src=\"$urls[$i]\" alt=\"Лінус Торвальдс\"></p>";
         echo "<p><b>Лінус Бенедикт Торвальдс</b> (швед. Linus Benedict Torvalds; народився 28 грудня 1969 у Гельсінкі, Фінляндія) — фінський програміст шведського походження, започаткував розробку ядра операційної системи Лінукс, є її головним архітектором, а також автор найвідомішої розподіленої системи керування версіями файлів Git. 2012 року за створення Linux нагороджений премією Millennium Technology Prize.</p>";
       }
       elseif ($i==1) {
         echo "<p class=\"T-center\"><img src=\"$urls[$i]\" alt=\"Кріс Метцен\" width=75% height=75%><p>";
         echo "<p><b>Крістофер Вінсент Метцен</b> (англ. Christopher Vincent Metzen; народився 22 листопада 1973, США) — американський ґейм-дизайнер, художник, голосовий актор та автор, відомий своєю роботою над вигаданими всесвітами та сценаріями для трьох відомих медіафраншиз Blizzard Entertainment: Warcraft, Diablo і StarCraft.</p>";
       }
       else{
         echo "<p class=\"T-center\"><img src=\"$urls[$i]\" alt=\"Джим Керрі\" width=35% height=35%></p>";
         echo "<p><b>Джеймс Юджі́н Ке́ррі</b> (англ. James Eugene \"Jim\" Carrey; народився 17 січня 1962, Ньюмаркет, Онтаріо, Канада) — канадо-американський актор, продюсер, комік. Найбільш відомий за фільмами «Маска», «Ейс Вентура: Розшук домашніх тварин», «Ейс Вентура 2: Поклик природи», «Дурний і ще дурніший», «Брехун, брехун», «Брюс Всемогутній». Один з найбільш високооплачуваних коміків США.</p>";
       }
?>
