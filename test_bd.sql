-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 08 2019 г., 15:53
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth`
--

CREATE TABLE `auth` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth`
--

INSERT INTO `auth` (`id`, `log`, `pass`, `email`) VALUES
(49, 'admin', 'querty', 'admin@email.com'),
(54, 'Timur', 'rodriges', 'rodriges@email.com');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `image`, `author`, `user_id`, `cat_id`, `date`) VALUES
(922, 'Импорт настроек', 'Консистентность. Разделение проекта на файлы, которые экспортируют только одну сущность, значительно облегчают управление поиском и зависимостями по мере увеличения кодовой базы. Именование каждого файла, в зависимости от экспортируемой сущности, делает его интуитивно понятным и не заставляет задумываться при обходе архитектуры.\r\n\r\n', '5c546b722c75c9.84659388.jpg', 'admin', 1, 0, '2019-01-29 15:47:30'),
(923, 'molestiae nemo vero', 'Magnam voluptatem aut voluptas. Impedit consequatur rem qui quo sapiente. Ut autem aspernatur id officiis commodi quis. Voluptatem non aut in aut est magni qui. Maiores et aperiam et est. Quisquam ut id deleniti aut unde ad sequi. Soluta dolorem rerum sit doloremque sapiente consectetur non. Sunt recusandae repellendus est sit quaerat. Fugiat eum harum autem dolor beatae sunt. Natus quod error et et in non nobis unde. Veritatis ab dolor ut in non nihil. Rerum perferendis eius dicta quisquam. Temporibus qui modi cumque officiis et quod quam sint.', '5c5d79f7715205.55275988.jpg', 'admin', 1, 0, '2019-01-29 15:47:30'),
(924, 'aperiam in aut', 'Ea et ea et sunt vel placeat. Fugiat occaecati quos fugit unde. Labore et adipisci aut aliquam. Ipsa consectetur sed deleniti similique excepturi impedit. Veniam deserunt facere labore tenetur. Debitis expedita culpa commodi quis tempore est ab accusamus. Dolorum consequatur commodi fuga corrupti voluptatem earum magni. Cumque velit sint eos quis. Rerum at et nihil esse exercitationem sed. Aut quo aut ea ut est. Aperiam ut et unde sunt ut.', 'dc9bcf8344bf921ac6cf3d5d83504f29.jpg', 'admin', 1, 0, '2019-01-29 15:48:02'),
(925, 'molestiae sunt minima', 'Alias dolor rerum esse eveniet qui dolorem. Saepe magni quae qui laboriosam voluptatem temporibus velit. Exercitationem modi voluptatem voluptatibus accusamus qui. Voluptas sed debitis voluptatem et. Ut harum similique qui fuga dolore error. Aliquid beatae ut temporibus nesciunt doloremque inventore et. Est tempore et esse rerum itaque. Voluptates ipsum et voluptatibus quis eum. Vel asperiores tempora aspernatur vitae et aliquid fugiat. Vel voluptatem dolores maxime delectus est illum.', '3f7fa22e2f83e68d783be59c77a498ff.jpg', 'admin', 1, 0, '2019-01-29 15:48:02'),
(926, 'ex assumenda quod', 'Voluptas temporibus dolorum molestias numquam sunt sed corporis. Voluptas non sequi ut dolorem numquam. Nulla provident eaque et soluta ut voluptatum nulla. Est quidem est voluptas fuga officiis aperiam. Recusandae numquam corporis architecto quas alias est. Ea rerum illum quis eum. Laborum voluptates temporibus dolorum reiciendis architecto id. Voluptas distinctio ad iusto rem. Similique nihil odio quae earum. Autem dolores praesentium error perspiciatis est laboriosam laudantium.', '5d2385b01ff2fd36c2d65728b8777c3d.jpg', 'admin', 1, 0, '2019-01-29 15:48:02'),
(927, 'saepe voluptatem cum', 'Necessitatibus qui ab porro. Explicabo animi odit unde. Non ea qui reprehenderit rerum enim itaque dicta distinctio. Reprehenderit repellat eos id. Tenetur eaque aperiam porro quae exercitationem delectus eius. Iste maiores vitae eos qui laborum cum enim veritatis. Soluta dolor mollitia asperiores rem unde aperiam. Quo labore nobis sit aliquid neque. Voluptate soluta consectetur quidem dolorum odit. Quibusdam quis aut ut velit debitis aut ipsam. Quos veniam accusamus necessitatibus aut molestias explicabo. Est nihil adipisci enim maiores. Tempore ut et ipsum dolor.', '4b867c56597784be14f7be6abd25792f.jpg', 'admin', 1, 0, '2019-01-29 15:48:41'),
(928, 'dignissimos beatae est', 'Minus et ipsam perspiciatis. Et nisi dignissimos amet. Dolorem repellat ullam vitae aut magni sequi. Corporis velit cumque iure eos illum quam vel. Officia esse laborum voluptas modi distinctio. Perferendis velit et velit ipsa eum. Quis id ad rerum. Asperiores ipsum sunt quia amet. Labore alias id voluptatem optio ea. Harum qui ut fuga quaerat explicabo rerum. Quia quam molestiae dicta eos neque. Accusantium omnis repudiandae laborum ut dicta provident quos impedit. Sed et eos autem saepe dignissimos ex. Fuga sint est unde corporis molestiae nam.', 'b9a93526dd3539cef4166fbd23722d98.jpg', 'admin', 1, 0, '2019-01-29 15:48:41'),
(929, 'dolor voluptatem fugiat', 'Ut id dolorum molestias officia. Culpa vel voluptatum illum quia similique excepturi asperiores ut. Facere et minus officiis aliquid. Aut et aut iste rerum dicta qui blanditiis. Sit molestias repudiandae natus aut aliquid. Natus iste et ipsum eos. Qui doloribus aut consequuntur molestias ea nisi ut. Officiis facere aut vel at. Magni est quia sit doloremque voluptates. Est quidem odit tenetur voluptatem iure non natus corrupti. Ut distinctio voluptates a similique molestiae possimus saepe fugiat.', 'e0efd495b3df4ff486c66ffbf3c3ce9e.jpg', 'admin', 1, 0, '2019-01-29 15:48:41'),
(931, 'magnam aut consequuntur', 'Est officia eos est maxime est in. Fuga et doloribus enim voluptatem atque sunt quis. Magnam quidem quo ea. Similique quos ratione expedita nesciunt voluptatum nobis. Voluptatem ut et dicta inventore temporibus illum impedit perspiciatis. Ad odio dolor perspiciatis. Perferendis rerum error fugit quod ducimus ab dolore. Error vitae veniam qui est natus. Et ratione impedit unde eos assumenda officia deserunt. Molestias dolores magnam assumenda qui. Quisquam nihil est et accusantium ullam. At ratione soluta pariatur tenetur qui rerum veritatis voluptatem.', '795a9679d64ab909b6115904de8f6ff2.jpg', 'admin', 1, 0, '2019-01-29 15:50:55'),
(932, 'tempora velit praesentium', 'Earum voluptatibus illum nam expedita. Aut accusantium repellendus quis amet. Accusamus ut modi quibusdam delectus sint libero natus. Sint cumque tenetur incidunt distinctio est provident hic. Expedita voluptatem qui in rem qui. Quibusdam enim qui dolorum repellat et nesciunt sequi. Aut nihil est est minima quis nihil. Qui magnam ipsum dolorem omnis ipsum dolorem optio aut. In dolorum eos nemo in ea tenetur. Quaerat nulla qui quos vel nostrum soluta. Magnam aut est id. Esse consequatur repellat culpa eum odit.', 'f7a09e2cb392b9322b6f35f42f12d6cf.jpg', 'admin', 1, 0, '2019-01-29 15:50:55'),
(935, 'Правильная шпаргалка по CSS-каскаду', 'Написать эту статью меня подтолкнула относительно недавняя статья на CSS-tricks (скорее всего, вы ее уже видели, ссылку не дам из вредности:). Ее автор проделал большую и замечательную работу — нарисовал красивую наглядную схему-«шпаргалку», написал объяснение простым языком, привел кучу примеров, не забыл даже про презентационные атрибуты, тоже влияющие на стили (в SVG)… Увы, даже та статья подтвердила два печальных правила: 1) никто не знает CSS, 2) никто не читает спецификаций. Так что первая ее редакция транслировала одно из популярных заблуждений о каскаде. К чести автора, он оперативно исправил и схему, и статью — но если бы он заглянул в стандарт, этого могло бы и не понадобиться…\r\n\r\nВот я и решил бесстыже спе позаимствовать идею простой и наглядной визуальной «шпаргалки» из той статьи — но сразу сделать ее правильной, отражающей не только личный опыт автора, но и стандарт.', '5c51d66b85e7d6.11989336.jpg', 'admin', 1, 0, '2019-01-30 18:52:59'),
(942, 'Обновленные генераторы', 'Генераторы в PHP тоже получили несколько приятных новых возможностей. Теперь у них появился оператор return, который может быть использован для выдачи некоторого финального значения, актуального на момент завершения итерации. Его можно использовать для проверки корректности выполнения генератора. Например, узнать, выполнился ли он без ошибок, что позволит коду, вызвавшему генератор, корректно обработать любую возникшую ситуацию.\r\n\r\nБольше того, генераторы могут возвращать и выдавать выражения из других генераторов. Таким образом, можно разбивать сложные операции на более простые.', '5c545e8a1039f7.37056390.jpg', 'admin', 1, 0, '2019-02-01 16:58:18'),
(943, 'in quisquam voluptatem', 'Quis quis et iure odit culpa sit sequi. Sint cupiditate corporis magni odio. Eos quia magni voluptas est eveniet labore dolor. Voluptas tempora similique qui officia impedit ratione rerum. Vel est magni reiciendis quae ut cumque. Qui qui amet aliquam id aliquam aspernatur vero. Aut id similique est omnis. Rerum qui deserunt eligendi asperiores. Maxime assumenda commodi similique cum consectetur voluptates. Ipsa deserunt quia rerum corrupti harum. Expedita non saepe explicabo et aliquid dolores consequatur. Consequatur sunt dolor voluptas harum.', 'd95e1dd11f80ace3708cef22fefb7578.jpg', 'admin', 1, 0, '2019-02-01 17:03:15'),
(944, 'nulla perferendis occaecati', 'Rem rerum corrupti similique incidunt omnis esse. Error in hic alias ut quam incidunt. Expedita dolores non aut aut quia vero quam nulla. Fuga magni consequatur repellat eius. Aut fuga autem tempora labore voluptates. Veniam eum qui perspiciatis earum nam aut maiores. Quasi impedit neque asperiores. Cumque ipsam autem nam ut inventore nisi vel. Dolore harum culpa maxime et velit totam laudantium aspernatur. Voluptatum dolores doloribus eius esse quia. Veritatis quia libero vel quo. Architecto ipsam aut minima ullam.', 'de863414c59102d7cd93658ee9441828.jpg', 'admin', 1, 0, '2019-02-01 17:03:15'),
(945, 'qui deserunt doloremque', 'Aut enim voluptatum et minima earum quis. Eaque et commodi qui. Inventore numquam sequi fugiat nihil et maiores perferendis. Aut architecto repudiandae dolorum nihil. Molestiae quae nihil ad voluptates nulla aperiam quas. Rerum eos aut non at molestiae eveniet qui. Inventore maiores optio qui odit minus. Provident sunt repudiandae inventore cupiditate culpa voluptas. Fuga eligendi ut blanditiis vel voluptas et laborum. Dolor autem itaque omnis quam. Reprehenderit nostrum autem reprehenderit harum praesentium repellendus tenetur.', '40b4a6fb1726e9db5de914b3e09ec193.jpg', 'admin', 1, 0, '2019-02-01 17:03:15'),
(946, 'cupiditate temporibus repellendus', 'Qui voluptate corrupti voluptas doloremque et enim rerum hic. Et eos commodi non animi. Est non esse et autem. Est aperiam nesciunt modi ipsum quisquam et. Numquam cum quo doloribus non vero. Autem quaerat est numquam vitae consequatur aliquam. Vel vel aut est inventore consequuntur illum. Et repellat fugiat unde nobis. Ullam vitae quia architecto sed nihil aut et. Facere corrupti adipisci sint consequatur consectetur.', '6d36862e8cb67ecf8dbd56f347087262.jpg', 'admin', 1, 0, '2019-02-01 17:03:25'),
(947, 'minus sunt eum', 'Voluptatem sit eligendi qui qui neque et in. Fuga ex at enim aperiam. Atque architecto pariatur quasi modi qui. Quibusdam neque ut quos. Praesentium voluptas quia ut. Repellendus et voluptatem eum. Repudiandae ex nostrum dolores cum sequi. At optio neque dicta. Possimus molestias qui culpa ea repellat. Maxime quasi id non itaque molestiae animi. Cum et libero nihil similique eum. Ducimus et quam doloremque nulla rerum. Rem et aliquam omnis autem maxime minus. Illum beatae est non et.', '11ddeec9ef75c0fa1d317400a2576246.jpg', 'admin', 1, 0, '2019-02-01 17:03:25'),
(949, 'Что умеет Clearfy?', 'Clearfy — это комплексный плагин от компании WebCraftic, который позволяет всячески настроить, удалить ненужное и оптимизировать WordPress. То что обычно делается вставкой кодов в файл functions.php и установкой нескольких плагинов, здесь собрано в одном месте. Зашел в админку «покликал» и что нужно для сайта настроено! Например, на сайте-визитке можно в один клик отключить комментирование и у брать пункт меню «Комментарии».\r\n\r\n', '5c546ed9784d82.70448207.jpg', 'admin', 1, 0, '2019-02-01 18:07:53'),
(950, 'amet mollitia et', 'Id id laboriosam nesciunt sed. Fugiat sint quia dolor dignissimos reiciendis minima. Corrupti officia eum consequuntur. Et porro esse quis eum ad voluptatem. Facilis laboriosam officiis at. Quia illo eius natus tempora eligendi corrupti quidem. Omnis hic alias reprehenderit perspiciatis et officiis quis. Suscipit hic nihil quia. Voluptate consequatur id voluptatem sit id suscipit magni deleniti. Fugit at dolorem aut perspiciatis quam consequatur. Sed similique quia unde eum. Officia et fugiat repellendus est numquam et adipisci.', '29ff05e3e33ce42c24ce26408fb59840.jpg', 'admin', 1, 0, '2019-02-01 18:09:50'),
(951, 'a doloremque voluptatum', 'Id architecto est eius quis unde. Ut tempora quia placeat enim. Corrupti rem ipsam molestias. Aut dolores quidem dignissimos consequatur ducimus blanditiis tempora. Voluptatem rerum voluptas doloribus. Officia ut quaerat assumenda sit. Omnis amet id laudantium molestiae ducimus labore. Distinctio maxime et repudiandae asperiores omnis officiis deserunt. Consequuntur reiciendis sit totam voluptatem architecto architecto rerum. Et vero qui ipsa voluptas odio incidunt sint. Et vel ipsum veniam blanditiis debitis culpa qui. Non velit rerum est debitis eveniet sit optio.', 'd0372d978f4c54f38b54ee343b469c0b.jpg', 'admin', 1, 0, '2019-02-01 18:09:50'),
(952, 'aut et at', 'Nihil sunt voluptates voluptatem impedit numquam. Sunt et sunt repudiandae est ut. Beatae aut iure dolor quia corrupti dolor. Impedit cumque rem odit cumque et temporibus. Culpa sit non et maiores corporis et earum aspernatur. Facere repudiandae assumenda nobis. Laudantium veritatis ut perferendis dolorem quibusdam. Non quod tenetur est eos commodi non. Qui facilis unde molestias a. Est voluptate facilis sed sunt enim dolor et.', '2e9722bd87df677357ed387fbcd57fbc.jpg', 'admin', 1, 0, '2019-02-01 18:09:50'),
(953, 'Менеджер скриптов', 'Отдельно хочу выделить «Менеджер скриптов». Есть масса плагинов которые подключают скрипты и стили на все страницы сайта, тогда как используются они не на всех страницах. В этом случае, чтобы оптимизировать работу подключаемых скриптов нужно искать где и как подключается скрипт плагина и отключать его соблюдая нужные условия. Все это отнимает столь драгоценное время.\r\n\r\nClearfy позволяет отключать скрипты/стили на указанных страницах или группах страниц в несколько кликов. Для этого нужно перейти на любую страницу сайта и в тулбаре нажать на пункт «Менеджер скриптов». Мы увидим все подключаемые на странице скрипты и сможем отключить ненужные:', '5c546f91e1fd12.97302868.jpg', 'admin', 1, 0, '2019-02-01 18:10:58'),
(954, 'Разделяй и властвуй', 'Консистентность. Разделение проекта на файлы, которые экспортируют только одну сущность, значительно облегчают управление поиском и зависимостями по мере увеличения кодовой базы. Именование каждого файла, в зависимости от экспортируемой сущности, делает его интуитивно понятным и не заставляет задумываться при обходе архитектуры.\r\n\r\nУправление. Разделяя код на модули, мы можем легко управлять ими, удалять и перемещать, при этом ничего не ломая. Когда ваша вспомогательная функция потребуется в другой части приложения, вы просто создаете каталог /shared и перемещаете её, это даст доступ к ней другим частям вашего кода.', '5c5494e71b9705.48606537.jpg', 'admin', 1, 0, '2019-02-01 20:50:15'),
(955, 'numquam vero laudantium', 'Voluptatem dolores et temporibus ipsum repellendus. Adipisci omnis sed qui iste et. Adipisci quae voluptate est fugit recusandae sunt dolor. Laudantium autem rerum autem distinctio nam ut saepe. Quas sapiente eius magnam in. Ut quis dolorem non molestiae est dolorem optio. Temporibus ab perspiciatis sed fugit voluptatibus. Non molestiae illo aspernatur aut voluptas vero. Dignissimos minima maiores voluptas sed dolore recusandae deleniti. Aut deleniti doloribus qui maxime et. Eveniet molestiae aut voluptatem sed qui.', 'e12806ff389bbf2ced792a2354638e5d.jpg', 'admin', 1, 0, '2019-02-01 20:55:08'),
(956, 'optio praesentium et', 'Magni natus aliquid fuga error. Sed hic hic nostrum ea in et. Nostrum enim nostrum corporis et in minus quaerat. Expedita qui id sed. Repudiandae cum molestiae voluptatem iure dolores velit et. Saepe consectetur earum qui. Natus consequuntur cumque aut. Facilis maiores ea inventore quia. Quo nihil et voluptatem harum est. Quia sed ex libero eligendi ipsum. Nihil cupiditate enim quo magnam tempore. Aut in odio non voluptatem velit voluptas ut tempore. Voluptatem consequatur adipisci ut sit iure.', '67889ca98acce6d1a61686a68e035ac8.jpg', 'admin', 1, 0, '2019-02-01 20:55:08'),
(957, 'impedit corrupti similique', 'Qui sit tempora debitis soluta. Voluptatibus necessitatibus ratione maxime deleniti. Magni aliquid veniam voluptas deserunt voluptatem. Rerum est ab distinctio aliquid deleniti quo. Repudiandae in voluptate modi velit molestiae. Harum minima quas omnis at nulla consequatur unde. Voluptate corporis explicabo eos doloremque autem aut. Natus error quia soluta est ullam ab et et. Pariatur dolorum aspernatur beatae excepturi temporibus ut atque. Cum cupiditate qui tempore. Numquam quo dolores iure.', '65831584f15fbf7af4e2f2350a5beae3.jpg', 'admin', 1, 0, '2019-02-01 20:55:08'),
(958, 'Правильная шпаргалка по CSS-каскаду', 'Помимо этого, в получении вычисленного значения CSS-свойства может участвовать значение, унаследованное от родителя (для наследуемых свойств). И да, иногда итоговые стили элемента зависят от других особенностей элемента — чаще всего атрибутов. Нагляднее всего это в SVG, где эти презентационные атрибуты (stroke, fill, r и т.д.) буквально соответствуют одноименным CSS-свойствам. По актуальному стандарту SVG2 даже d у <path> соответствует CSS-свойству, что позволяет анимировать стилями сами контуры SVG-фигур (правда, пока лишь в «хромятах»). Но подобные атрибуты есть и в HTML. С некоторыми из них, вроде width и height для <img>, мы по сей день регулярно встречаемся. Другие, вроде text и bgcolor у <body> (задающие ему цвет текста и фона соответственно) почти забыты и встречаются лишь на реликтовых страницах из 90-х — но браузеры их поддерживают, поскольку таких страниц еще немало. И еще у каждого свойства есть начальное значение, которое назначается ему, если для этого элемента нигде ничего больше не указано (на «турнир» каскада никто не явился и он не состоялся:).', '5c54992007dbf0.65266121.png', 'admin', 1, 0, '2019-02-01 21:08:16'),
(959, 'nesciunt non doloribus', 'Voluptatibus dolorum facilis earum iusto. Porro quo beatae illo libero nobis in rem. Dolores iusto aut qui consectetur eveniet. Eligendi rerum non ab id praesentium sed quaerat. Repudiandae temporibus voluptas iusto labore consectetur commodi voluptas. Sit et nihil reprehenderit magni suscipit sint. Qui perspiciatis provident aliquid qui provident maiores rerum. Quo error nemo vel voluptas. At ut laboriosam qui libero quae molestiae ipsa. Corrupti maxime distinctio est nihil. Deleniti tenetur minus delectus aut eos cum.', '2cb6d0946fd40d4d726650ceebdb3399.jpg', 'admin', 1, 0, '2019-02-01 21:54:59'),
(960, 'quo in sit', 'Culpa reprehenderit enim nihil velit maiores voluptatem. Temporibus est similique ut minus dolorum. Tenetur consequatur provident rem est id. In quia recusandae repellat laudantium et. Doloribus facilis voluptates et. Dolores dolor ipsum voluptate aperiam. Sit officia ut saepe dignissimos sed dolorem voluptatem. Dolor quae quos iste. Dolor voluptatum est veniam consequatur nostrum nam modi. Qui nesciunt natus ducimus ex dolor voluptatem. Qui harum quae similique incidunt.', '37f84896e2ebcee69540b470d380e675.jpg', 'admin', 1, 0, '2019-02-01 21:54:59'),
(961, 'dolore quis autem', 'Sed consequatur aut ut dicta exercitationem. Doloremque voluptatum laborum non quos reprehenderit veniam sed minus. Et culpa repellendus rerum. Accusantium soluta vitae nostrum omnis tempore deleniti aliquam. Voluptatibus libero illum quia voluptas eum ipsa cum. Quo sequi magnam vel qui voluptatem. Ad aut modi iste quo est delectus. Id illum nulla quia est. Dolorum eum sit quos et alias. Occaecati consectetur dolor vel non sed quam. Sunt sunt non consequatur. At aut aliquid est non. Ut rerum non ut rem ea.', '3978d22ca368ea727a7081cd672cdbfa.jpg', 'admin', 1, 0, '2019-02-01 21:54:59'),
(962, 'nihil unde repudiandae', 'Beatae velit voluptatem voluptatibus sed cumque et voluptatem nulla. Impedit dolor exercitationem porro accusamus qui aut. Incidunt aliquam atque iste qui. Et beatae rerum omnis harum itaque aut. Quidem error ut et totam qui qui magnam repellendus. Consectetur et et enim quidem atque eligendi. Voluptatem voluptatem voluptates totam nulla quas possimus. Deserunt culpa temporibus qui rerum est iste pariatur veritatis. Libero accusamus voluptatem quis ducimus esse eos. Suscipit esse et aspernatur ut. At quia vel velit consequatur.', '9c3a1a315c215d5b573c1f5a6a5bd169.jpg', 'admin', 1, 0, '2019-02-01 21:55:05'),
(963, 'repudiandae dicta quia', 'Sed laborum est dolorem sit quo a ut dicta. Sint est modi nemo eaque non et. Voluptate dicta pariatur omnis dolorem officia a. Odit ab omnis repellendus est molestiae. Adipisci velit consequatur dolor deleniti quas consequatur perferendis mollitia. Earum tenetur dolorum rerum nulla dicta fugiat aspernatur. Atque ut ipsam cumque quia. Perferendis vitae et similique et repudiandae voluptatem repudiandae. Nesciunt consequatur voluptas velit fuga. Sapiente recusandae et sit quo. Consequatur voluptates repellat porro dignissimos dolore velit. Eius reprehenderit similique earum est.', '4c0a158ce635b8247147e12e01c12117.jpg', 'admin', 1, 0, '2019-02-01 21:55:05'),
(964, 'deleniti nihil similique', 'Neque possimus ex vitae aspernatur voluptatibus. Nesciunt minima voluptate corrupti maxime. Officia commodi illum iste et modi illo non. Molestiae nesciunt id quisquam laborum ea voluptatem. Consequatur sunt nostrum sapiente molestias. Illum et et et et. Assumenda fuga in velit dolor. Qui accusantium voluptas commodi qui. Quidem praesentium ullam hic doloribus ad. Fuga nisi voluptate assumenda non et asperiores minus. Qui autem amet voluptatum commodi. Qui nemo ut odio officiis harum.', 'cf43bc227d1db42739ded2fc2a9c5434.jpg', 'admin', 1, 0, '2019-02-01 21:55:05'),
(965, 'quam nemo est', 'Doloribus dolores vero fuga iusto. Consequatur ut corporis minus omnis recusandae veniam deserunt. Eaque iste corrupti aut. Fugiat non id itaque assumenda minima corporis ipsam sit. Quo iure consectetur quia id nemo. Itaque esse voluptatem optio soluta optio tempora. Ratione sit tenetur perferendis aut reprehenderit cumque pariatur inventore. Explicabo eum saepe sit fuga dolores ipsam. Harum voluptatum doloribus officiis at. Ut ut fugiat cumque qui. Voluptas ea tempora accusamus corporis.', 'e89823828315a11e646f09d64e25ca08.jpg', 'admin', 1, 0, '2019-02-01 21:55:10'),
(966, 'corporis est dignissimos', 'Eius deleniti placeat minus rerum impedit aspernatur in. Nihil est iste temporibus quis eaque. Sequi nam eos eveniet dolorem. Provident cupiditate et porro qui rerum similique doloribus. Id voluptas tempore est eligendi. Rerum temporibus nihil repellendus. Ex iure et harum est nostrum. Id harum quos quaerat. Natus adipisci repellat et quis. Harum aliquid omnis cumque asperiores sunt. Rem quo praesentium molestiae ea voluptatem.', '90ba2c0cc79e226370e828c32c8aafbe.jpg', 'admin', 1, 0, '2019-02-01 21:55:10'),
(967, 'libero a est', 'Ipsum et dicta odio ad voluptate doloremque. Distinctio ipsa perspiciatis totam earum ad non dolorem. Quibusdam ut eos quis libero id natus. Reprehenderit necessitatibus dolor nihil excepturi non. Aut assumenda voluptas consequatur aut quod nam. Non rem possimus assumenda accusamus sed doloremque. Nulla dignissimos perspiciatis cum iste et quaerat. Et enim minus quam. Reprehenderit velit voluptatem ut adipisci dolorem ut culpa. Repellendus assumenda at quia vel sint fugit ut numquam. Est recusandae quidem aliquid debitis.', 'b4c74c0cb9114460087c4870556bff76.jpg', 'admin', 1, 0, '2019-02-01 21:55:10'),
(968, 'Прячем wp-login.php', 'Этот плагин не решит всех проблем, но поможет избавится от типовых задач: нагрузка, оптимизация, защита, seo. Такие задачи встречаются на каждом без исключения сайте!\r\n\r\nБольшой плюс — это хороший код и грамотный подход в разработке, поэтому, вашему сайту не придется страдать от багов или конфликтного кода, который может написать юный фрилансер, или который вы найдете где-то в интернете.\r\n\r\nClearfy — это отличное дополнение, к существующим SEO и другим плагинам. Бесплатных аналогов ему с таким же качеством я пока не видел.', '5c54a44b58fe82.95212752.jpg', 'admin', 1, 0, '2019-02-01 21:55:55'),
(969, 'Прячем wp-login.php', 'На тонкую настройку плагина уйдет время и когда нужно будет сделать такую же настройку на другом сайте возможность импорта будет как нельзя кстати.\r\n\r\nПлагин показывает все текущие настройки в поле импорта, в виде обычной строки. Эту строку (текст) можно скопировать и вставить в такое же поле на другом сайте, а затем нажать «Импортировать». И так, за пару секунд, настроить другой сайт под наши обычные требования.\r\n\r\nИли можно сохранить разные варианты настроек под несколько задач и потом быстро устанавливать их на сайте.', '5c54af43390bf5.80553939.jpg', 'admin', 1, 0, '2019-02-01 22:42:43'),
(970, 'impedit nam qui', 'Laboriosam vitae rem rem ad ea magnam quia. Voluptatem voluptatem ea laboriosam laborum. Consequatur unde ex doloribus sit sed sed quia. Enim commodi est earum laudantium officia hic non eaque. Nisi praesentium aut repellendus mollitia aut hic omnis. Eligendi ut delectus voluptates quasi cumque ad. Eum consequatur occaecati rem dolor. Sunt voluptatum in sed mollitia placeat vel. Doloribus quia sed asperiores consequuntur. Velit id tempore rerum quam ab a. Architecto sit qui sed neque.', 'd6275b99c4c46463df250f224338631e.jpg', 'admin', 1, 0, '2019-02-01 22:45:44'),
(971, 'minima mollitia quibusdam', 'Et sint natus consectetur dolor velit porro qui et. Aliquam est distinctio quibusdam facere. Saepe libero et voluptates quo ipsam earum id modi. Alias excepturi voluptas vel incidunt ea. Hic rerum eos culpa eum recusandae enim ut quae. Quos aliquid nesciunt doloribus unde tenetur voluptas labore. Nobis ut laboriosam adipisci assumenda. Illum quam aut voluptatem non sapiente itaque non. Ex quae et odio deserunt iure optio. Culpa facere praesentium laudantium consequatur. Repudiandae non aut soluta ipsa atque fugiat.', '7a17232389177953c8026bd0cc59bf54.jpg', 'admin', 1, 0, '2019-02-01 22:45:44'),
(972, 'rem ab reiciendis', 'Rerum aut quas hic qui ut quasi. Mollitia laboriosam earum accusantium consequatur voluptas non quia quia. Laboriosam eveniet alias doloremque ex quis nam aut deserunt. Quaerat quibusdam nam dolor modi recusandae voluptas est accusamus. Voluptate fugiat ut quo. Error eaque earum ea rerum ratione ut repellendus. Esse soluta fugiat quo impedit. Dolor et enim hic qui qui. Corporis tempore rerum et nihil. Vitae praesentium dolorem debitis autem. Rerum quod possimus culpa impedit non sed cumque.', 'fa69ef44092cbe01ff08f9ec6c9b613c.jpg', 'admin', 1, 0, '2019-02-01 22:45:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`) VALUES
(1, 'admin@email.com', '$2y$10$GEsTMx/SLUac.L3VREtDFekUXlJ3dFBnggfEGQOjq72.c59yLV4hK', 'admin', 0, 1, 1, 3, 1546170302, 1549629482, 0),
(25, 'max@email.com', '$2y$10$E8SM3vutEn.DhtnO5CSnkeQzoYGu0cjkD0kjve9srjm/S9ZbrMB6W', 'max', 0, 1, 1, 0, 1548756692, 1548757072, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_confirmations`
--

INSERT INTO `users_confirmations` (`id`, `user_id`, `email`, `selector`, `token`, `expires`) VALUES
(1, 1, 'admin@email.com', 'ALAeHiHCkVjKDrPz', '$2y$10$wy70YtZSv6wvuoNVxkTya.fEloEb3ybR7axRffu5f0gdPQIJ5av0i', 1546256702),
(2, 2, 'ghbdtn@email.com', 'wirAabI8uepHIW9N', '$2y$10$57c7mCUFWl0wr1AckToenuRxyNnIrIEIgQLZS6wi0cO01ck9ZitIO', 1546272560),
(3, 3, 'max3bf@rambler.ru', 'qrS-Yo43HbBAWCna', '$2y$10$pDnHzn0cGiAgT6U4fL3DreLfYSXvOcvexDYHtWefMvAMzz/kpwgkC', 1546277258),
(4, 4, 'ivan@email.com', 'vttXW0rCwUKAjRiU', '$2y$10$gGSGqz3EaNwG2V/9DAwRMuoBtb7QiYfJabTGimvHqAWX0EH41a6Rq', 1546277512),
(5, 5, 'max@email.com', '1o9mZewR0FtiuI1c', '$2y$10$ZMKM/2PjvaYg4ajWRCeo2u3V2qfXz0qlqurD8EFFu3.M5XqzTs89u', 1546336577),
(6, 16, 'tima@email.com', 'VJHgrXniWcbau3Im', '$2y$10$pfngTOU6SA8GgM6IQYDfm.bGLvjnExt3NPL0AmMpgsI02y2Zdx9z.', 1547302998),
(7, 17, 'magu.git@gmail.com', 'QjAgYvQbji5VUzcC', '$2y$10$ljc.1dW8qhbTFgx4D2TwzenVNe5AOJhhaBbdyOr2Mrr2qYa5quS/u', 1547304471),
(9, 19, 'ivan@email.com', '0iiRgfunuykoYlcb', '$2y$10$GJGgWhDcyj861VeE2iMl1.AWTmbbNcgdLATp5n6CCgfwNnxgVQhQu', 1547304903);

-- --------------------------------------------------------

--
-- Структура таблицы `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('QduM75nGblH2CDKFyk0QeukPOwuEVDAUFE54ITnHM38', 74, 1549629482, 1550169482),
('PZ3qJtO_NLbJfRIP-8b4ME4WA3xxc6n9nbCORSffyQ0', 4, 1548756695, 1549188695),
('OMhkmdh1HUEdNPRi-Pe4279tbL5SQ-WMYf551VVvH8U', 19, 1546333570, 1546369570),
('07m2668mKDlfvDceALA_wBqjmZw8QNzIEM-W38_LDGg', 499, 1546333570, 1546506370),
('HIJQJPUQ2qyyTt0Q7_AuZA0pXm27czJnqpJsoA5IFec', 49, 1548756915, 1548828915),
('JFrT7x4Rp1OD6caL_QV8ju0DY_LXbxc-amTAElJqWnw', 29, 1547218230, 1547290230),
('6LQh20-2q7GbQxTIwcXC-vu6p1pxFmh_B_CmA5-ps0A', 29, 1547218230, 1547290230),
('ALZJW8QApUQPwYAXZh3e6JFibZ-w-BKNNyg0Xy9NaxY', 29, 1547722742, 1547794742),
('dpu1gf0i-J6O7vod4C7uWqKBjQjyXDo3vvsxRPumBOY', 29, 1547722742, 1547794742),
('QKKgqOXbOWkMIwW8ZbbyAIkWDmRKWngGTOdLN-dlGkg', 29, 1547728091, 1547800091),
('vTAHSaEtlqIq4tNQKksdP9P4yAE6pFLctmPCEuqiujc', 29, 1547728091, 1547800091),
('uIpQj-ddTLIButvCDtSjrf__nLAqNpfaoPIwE7uqnuk', 28.0242, 1548413994, 1548485994),
('yPHHRx4B4Y51dGbGOvpDGTKiMIHGBDbe4lIA4AyhAqY', 28.0242, 1548413994, 1548485994),
('w9IxzezhehuGBm1lzjbLZ5ddDavzl_FqGq0_1tyT-Pk', 29, 1548415856, 1548487856),
('db4x5kpURgosV2fkOdqSSt_jMTkoBTgi737G7k5uTfU', 29, 1548415856, 1548487856),
('TGqFayVovDvLNLxVIG7c5sg6xKvbIjPTOC0azhP18vg', 29, 1548575612, 1548647612),
('BrPdvqaONiJ57lu84qoyzmHQl5YXWw9JxQ_YyfbZyFY', 29, 1548575612, 1548647612),
('0MH5qO8SayeSfoFTI44eVXpNOIXuKJtg6pPrQSbyRb0', 29, 1548756915, 1548828915),
('3UKZD8PecQRxKJCkac0s5SqZCauLQEA1Tw3LrtFwRjM', 29, 1548756915, 1548828915);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth`
--
ALTER TABLE `auth`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Индексы таблицы `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auth`
--
ALTER TABLE `auth`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=973;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
