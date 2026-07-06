<?php try { echo DB::table('documents')->skip(10)->take(10)->toSql(); } catch (Throwable $e) { echo $e->getMessage() . PHP_EOL . $e->getTraceAsString(); }
