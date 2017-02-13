
Admin area
<li role="presentation">
    <form action="/logout" method="POST" id="logout-form">
  {{ csrf_field() }}

  <a href="#" onclick="document.getElementById('logout-form').submit()">logout </a>
</form>
</li>
