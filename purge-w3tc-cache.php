<?php
// This file is run programatically through .travis.yml to clear W3TC caches

include 'web/app/plugins/w3-total-cache/w3-total-cache-api.php';

w3tc_flush_all();
w3tc_dbcache_flush();
w3tc_browsercache_flush();
w3tc_objectcache_flush();
w3tc_opcache_flush();