<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website | {%block title %}{% endblock %}</title>
  </head>
  <body>
      {% include 'templates/partial/navigation.php'%}
      {% include 'templates/partial/messages.php'%}
    {% block content %}{% endblock %}
  </body>
</html>
