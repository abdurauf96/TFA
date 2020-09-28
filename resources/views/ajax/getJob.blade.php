<div class="spisok_title">Должностные обязанности:</div>
<ul class="spisok">
  
 <li class="spisok_nav"> {!! $job->getTranslatedAttribute('obizannosti', \App::getLocale(), 'ru') !!}</li>

</ul>
<div class="spisok_title">Требования:</div>
<ul class="spisok">
  <li class="spisok_nav">{!! $job->getTranslatedAttribute('trebovaniya', \App::getLocale(), 'ru') !!}</li>
</ul>