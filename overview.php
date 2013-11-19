<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Infinitum Framework | Overview</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="css/infinitum-theme/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script>
    $(function() {
        $("#accordion").accordion({ header: "h2",  heightStyle: "content" });
    });
</script>
</head>

<body>
  <?php include_once("analyticstracking.php") ?>
  <div id="container">
	<?php include_once("header.php") ?>
    <div class="center-content">
        <div id="body">
            <div id="accordion">
                <h2>What is Infinitum?</h2>
                <div>
                  <p>Infinitum is a modular framework designed to aid developers in creating
                     high-quality Android applications. It's based on the principle that developers
                     should:</p>
                  <ul>
                    <li>write less code;</li>
                    <li>write cleaner code;</li>
                    <li>spend less time.</li>
                  </ul>
                  <p>One of Infinitum's primary goals is to foster a strong separation of concerns,
                     empowering developers to write modular and concise code for the Android platform.
                     The idea is to maintain focus on the fundamental business problem of the software,
                     not the underlying plumbing that connects it.</p>
                  <p>Infinitum Framework comprises several extensible modules: Core, ORM, AOP,
                     Web, and UI.</p>
                </div>
                <h2>Infinitum Core</h2>
                <div>
                  <p><a style="color:#35650e" href="https://github.com/InfinitumFramework/Infinitum-Core">Infinitum Core</a> offers
                     an inversion-of-control container which allows for framework
                     and non-framework beans to be injected and retrieved at runtime. Beans, aspects,
                     and other application components can be automatically discovered by Infinitum, and
                     the framework also provides support for autowiring properties, methods, and
                     constructors. Likewise, Android activities can be injected with layouts, views, and
                     resources and event listeners can be bound to views using annotations -- yielding
                     cleaner, more concise code.</p>
                  <p>In addition to dependency injection, Infinitum provides a lightweight logging
                     framework which wraps Android's Logcat. This logging framework allows log statements
                     to be made within application code but only asserted in debug environments. This
                     means that logging code does not need conditional statements or be removed
                     altogether when preparing an application for release.</p>
                  <p>Infinitum Core implements an event framework that allows application code to subscribe
                     to predefined events and lifecycle hooks, such as those found in activities and fragments.</p>
                </div>
              <h2>Infinitum ORM</h2>
              <div>
                <p><a style="color:#35650e" href="https://github.com/InfinitumFramework/Infinitum-ORM">Infinitum ORM</a> allows
                   developers to spend more time focusing on their problem domain and core business logic
                   and less time on innate data-access and boilerplate code. It embraces object-oriented
                   principles such as polymorphism, inheritance, and association while maintaining a great
                   deal of flexibility. The ORM allows developers to specify what is transient or
                   persistent at a class- and field-level, and it is configurable using either XML
                   mappings or Java annotations. The Infinitum ORM also provides a criteria API for
                   constructing database queries, allowing developers to query on objects rather than
                   tables &#8212; no SQL necessary.</p>
                <p>Additionally, the framework offers an extensible REST ORM implementation, granting developers
                   an effortless way to communicate with their own RESTful web services using domain
                   objects.</p>
              </div>
              <h2>Infinitum AOP</h2>
              <div>
                <p><a style="color:#35650e" href="https://github.com/InfinitumFramework/Infinitum-AOP">Infinitum AOP</a> is
                   used to separate cross-cutting concerns through aspect-oriented programming. With it,
                   developers can alter or extend the behavior of core application code by creating
                   aspects, which are used to apply advice at specific join points.</p>
                <p>The AOP module also includes a cache abstraction. When enabled, methods can be marked
                  for caching so that results can be retrieved without invoking the method on subsequent
                  calls with the same arguments. This is particularly valuable for computation- or
                  resource- intensive code.</p>
              </div>
              <h2>Infinitum Web</h2>
              <div>
                <p><a style="color:#35650e" href="https://github.com/InfinitumFramework/Infinitum-Web">Infinitum Web</a>
                   offers a REST client that provides support for caching, simplified
                   authentication, and a number of other features that allow developers to consume REST
                   APIs with ease. The framework offers both fine- and coarse- grained clients, meaning
                   developers can choose to deal with HTTP responses at a low level (i.e. manually
                   performing message interpretation, deserialization, etc.) or a high level (i.e.
                   allowing the framework to handle message conversion).</p>
              </div>
              <h2>Infinitum UI (Experimental)</h2>
              <div>
                <p><a style="color:#35650e" href="https://github.com/InfinitumFramework/Infinitum-UI">Infinitum UI</a>
                   provides tools to create rich, data-driven user interfaces. It integrates with Infinitum ORM and
                   the Infinitum event framework to support data-bound UI widgets, meaning that the UI updates
                   automatically whenever the data model changes.</p>
              </div>
            </div>
        </div>
    </div>
    <?php include_once("footer.php") ?>
  </div>
</body>