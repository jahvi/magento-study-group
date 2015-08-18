<?php
$comments = array(
    array(
        'comment' => 'Amet et sed! Cras duis? Placerat! Scelerisque turpis, elementum in nunc lorem'
    ),
    array(
        'comment' => 'Ut nec mauris, elementum, sagittis egestas nec dis cursus?'
    ),
    array(
        'comment' => 'Enim augue, platea vel lorem massa! Magna aenean, a elementum augue'
    ),
    array(
        'comment' => 'Nisi nisi sit nunc. Turpis, turpis elementum risus tortor adipiscing'
    ),
    array(
        'comment' => 'Augue porta mus tortor lacus, egestas integer porta elementum elit, tristique?'
    )
);

foreach ($comments as $comment) {
    Mage::getModel('meeting0401/comment')->setData($comment)->save();
}
