<?php
// سحب الكود من المستودع مباشرة
$output = shell_exec("git pull origin main 2>&1");

// عرض النتيجة للتأكد أنها تعمل
echo "<pre>$output</pre>";