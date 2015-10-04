<?php
//group comment_top
mm_widget_showimagetvs(); // Показываем превью ТВ
mm_renameField("log", "Дочерние ресурсы отображаются в дереве");
mm_changeFieldHelp("log", "Это поле используется для папок с большим числом вложенных страниц");
mm_renameField("description","Описание (meta «description»)");
mm_renameField("longtitle","Расширенный заголовок");
mm_renameField("menuindex","Позиция");
mm_renameField("show_in_menu","Отображать");
mm_hideFields("content_dispo");
mm_moveFieldsToTab("published", "general");
//mm_moveFieldsToTab("pub_date", "general","",5);
mm_requireFields("pagetitle");
mm_createTab("SEO", "Seo", "!3", "", "<p>Здесь вы можете отредактировать всё, что касается поисковой оптимизации.</p>");
mm_moveFieldsToTab("longtitle,alias,menutitle,keyw,seoOverride,noIndex,link_attributes", "Seo", "!3");
mm_moveFieldsToTab("description", "Seo", "!3","!11");

//group New group
mm_ddMultipleFields('tel1','','13','field','','180','||','::','300','100','0','0','');
mm_ddMultipleFields('new,special','','13','field','Название страницы','180','||','::','300','100','0','0','');
//group comment_bottom

?>
