<?php  
    echo $this->Paginator->prev('«', array('tag' => 'li'), '<a href="">«</a>', array('tag' => 'li','class' => 'disabled', 'escape'=>false));  
    echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass'=>'active', 'currentTag'=>'a'));  
    echo $this->Paginator->next('»', array('tag' => 'li'), '<a href="">»</a>', array('tag' => 'li','class' => 'disabled', 'escape'=>false));  
