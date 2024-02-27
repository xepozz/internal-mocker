<?php

return [
    'ctype_alnum' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_alpha' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_cntrl' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_digit' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_lower' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_graph' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_print' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_punct' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_space' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_upper' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'ctype_xdigit' =>
        [
            'signatureArguments' => 'mixed $text',
            'arguments' => '$text',
        ],
    'confirm_pdo_ibm_compiled' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sybase_connect' =>
        [
            'signatureArguments' => '$servername = null, $username = null, $password = null, $charset = null, $appname = null',
            'arguments' => '$servername, $username, $password, $charset, $appname',
        ],
    'sybase_pconnect' =>
        [
            'signatureArguments' => '$servername = null, $username = null, $password = null, $charset = null, $appname = null',
            'arguments' => '$servername, $username, $password, $charset, $appname',
        ],
    'sybase_close' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'sybase_select_db' =>
        [
            'signatureArguments' => '$database_name, $link_identifier = null',
            'arguments' => '$database_name, $link_identifier',
        ],
    'sybase_query' =>
        [
            'signatureArguments' => '$query, $link_identifier = null',
            'arguments' => '$query, $link_identifier',
        ],
    'sybase_unbuffered_query' =>
        [
            'signatureArguments' => '$query, $link_identifier, $store_result = null',
            'arguments' => '$query, $link_identifier, $store_result',
        ],
    'sybase_free_result' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sybase_get_last_message' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sybase_num_rows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sybase_num_fields' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sybase_fetch_row' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sybase_fetch_array' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sybase_fetch_assoc' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sybase_fetch_object' =>
        [
            'signatureArguments' => '$result, $object = null',
            'arguments' => '$result, $object',
        ],
    'sybase_data_seek' =>
        [
            'signatureArguments' => '$result_identifier, $row_number',
            'arguments' => '$result_identifier, $row_number',
        ],
    'sybase_fetch_field' =>
        [
            'signatureArguments' => '$result, $field_offset = null',
            'arguments' => '$result, $field_offset',
        ],
    'sybase_field_seek' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'sybase_result' =>
        [
            'signatureArguments' => '$result, $row, $field',
            'arguments' => '$result, $row, $field',
        ],
    'sybase_affected_rows' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'sybase_min_client_severity' =>
        [
            'signatureArguments' => '$severity',
            'arguments' => '$severity',
        ],
    'sybase_min_server_severity' =>
        [
            'signatureArguments' => '$severity',
            'arguments' => '$severity',
        ],
    'sybase_set_message_handler' =>
        [
            'signatureArguments' => '$handler, $connection = null',
            'arguments' => '$handler, $connection',
        ],
    'sybase_deadlock_retry_count' =>
        [
            'signatureArguments' => '$retry_count',
            'arguments' => '$retry_count',
        ],
    'svn_checkout' =>
        [
            'signatureArguments' => '$repos, $targetpath, $revision = SVN_REVISION_HEAD, $flags = 0',
            'arguments' => '$repos, $targetpath, $revision, $flags',
        ],
    'svn_cat' =>
        [
            'signatureArguments' => '$repos_url, $revision_no = SVN_REVISION_HEAD',
            'arguments' => '$repos_url, $revision_no',
        ],
    'svn_ls' =>
        [
            'signatureArguments' => '$repos_url, $revision_no = SVN_REVISION_HEAD, $recurse = false, $peg = false',
            'arguments' => '$repos_url, $revision_no, $recurse, $peg',
        ],
    'svn_log' =>
        [
            'signatureArguments' => '$repos_url, $start_revision = null, $end_revision = null, $limit = 0, $flags = SVN_DISCOVER_CHANGED_PATHS|SVN_STOP_ON_COPY',
            'arguments' => '$repos_url, $start_revision, $end_revision, $limit, $flags',
        ],
    'svn_auth_set_parameter' =>
        [
            'signatureArguments' => '$key, $value',
            'arguments' => '$key, $value',
        ],
    'svn_auth_get_parameter' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'svn_client_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'svn_config_ensure' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'svn_diff' =>
        [
            'signatureArguments' => '$path1, $rev1, $path2, $rev2',
            'arguments' => '$path1, $rev1, $path2, $rev2',
        ],
    'svn_cleanup' =>
        [
            'signatureArguments' => '$workingdir',
            'arguments' => '$workingdir',
        ],
    'svn_revert' =>
        [
            'signatureArguments' => '$path, $recursive = false',
            'arguments' => '$path, $recursive',
        ],
    'svn_resolved' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'svn_commit' =>
        [
            'signatureArguments' => '$log, array $targets, $recursive = true',
            'arguments' => '$log, $targets, $recursive',
        ],
    'svn_lock' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'svn_unlock' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'svn_add' =>
        [
            'signatureArguments' => '$path, $recursive = true, $force = false',
            'arguments' => '$path, $recursive, $force',
        ],
    'svn_status' =>
        [
            'signatureArguments' => '$path, $flags = 0',
            'arguments' => '$path, $flags',
        ],
    'svn_update' =>
        [
            'signatureArguments' => '$path, $revno = SVN_REVISION_HEAD, $recurse = true',
            'arguments' => '$path, $revno, $recurse',
        ],
    'svn_import' =>
        [
            'signatureArguments' => '$path, $url, $nonrecursive',
            'arguments' => '$path, $url, $nonrecursive',
        ],
    'svn_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'svn_export' =>
        [
            'signatureArguments' => '$frompath, $topath, $working_copy = true, $revision_no = -1',
            'arguments' => '$frompath, $topath, $working_copy, $revision_no',
        ],
    'svn_copy' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'svn_switch' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'svn_blame' =>
        [
            'signatureArguments' => '$repository_url, $revision_no = SVN_REVISION_HEAD',
            'arguments' => '$repository_url, $revision_no',
        ],
    'svn_delete' =>
        [
            'signatureArguments' => '$path, $force = false',
            'arguments' => '$path, $force',
        ],
    'svn_mkdir' =>
        [
            'signatureArguments' => '$path, $log_message = null',
            'arguments' => '$path, $log_message',
        ],
    'svn_move' =>
        [
            'signatureArguments' => '$src_path, $dst_path, $force = false',
            'arguments' => '$src_path, $dst_path, $force',
        ],
    'svn_proplist' =>
        [
            'signatureArguments' => '$path, $recurse = false, $revision',
            'arguments' => '$path, $recurse, $revision',
        ],
    'svn_propget' =>
        [
            'signatureArguments' => '$path, $property_name, $recurse = false, $revision',
            'arguments' => '$path, $property_name, $recurse, $revision',
        ],
    'svn_repos_create' =>
        [
            'signatureArguments' => '$path, ?array $config = null, ?array $fsconfig = null',
            'arguments' => '$path, $config, $fsconfig',
        ],
    'svn_repos_recover' =>
        [
            'signatureArguments' => '$path',
            'arguments' => '$path',
        ],
    'svn_repos_hotcopy' =>
        [
            'signatureArguments' => '$repospath, $destpath, $cleanlogs',
            'arguments' => '$repospath, $destpath, $cleanlogs',
        ],
    'svn_repos_open' =>
        [
            'signatureArguments' => '$path',
            'arguments' => '$path',
        ],
    'svn_repos_fs' =>
        [
            'signatureArguments' => '$repos',
            'arguments' => '$repos',
        ],
    'svn_repos_fs_begin_txn_for_commit' =>
        [
            'signatureArguments' => '$repos, $rev, $author, $log_msg',
            'arguments' => '$repos, $rev, $author, $log_msg',
        ],
    'svn_repos_fs_commit_txn' =>
        [
            'signatureArguments' => '$txn',
            'arguments' => '$txn',
        ],
    'svn_fs_revision_root' =>
        [
            'signatureArguments' => '$fs, $revnum',
            'arguments' => '$fs, $revnum',
        ],
    'svn_fs_check_path' =>
        [
            'signatureArguments' => '$fsroot, $path',
            'arguments' => '$fsroot, $path',
        ],
    'svn_fs_revision_prop' =>
        [
            'signatureArguments' => '$fs, $revnum, $propname',
            'arguments' => '$fs, $revnum, $propname',
        ],
    'svn_fs_dir_entries' =>
        [
            'signatureArguments' => '$fsroot, $path',
            'arguments' => '$fsroot, $path',
        ],
    'svn_fs_node_created_rev' =>
        [
            'signatureArguments' => '$fsroot, $path',
            'arguments' => '$fsroot, $path',
        ],
    'svn_fs_youngest_rev' =>
        [
            'signatureArguments' => '$fs',
            'arguments' => '$fs',
        ],
    'svn_fs_file_contents' =>
        [
            'signatureArguments' => '$fsroot, $path',
            'arguments' => '$fsroot, $path',
        ],
    'svn_fs_file_length' =>
        [
            'signatureArguments' => '$fsroot, $path',
            'arguments' => '$fsroot, $path',
        ],
    'svn_fs_txn_root' =>
        [
            'signatureArguments' => '$txn',
            'arguments' => '$txn',
        ],
    'svn_fs_make_file' =>
        [
            'signatureArguments' => '$root, $path',
            'arguments' => '$root, $path',
        ],
    'svn_fs_make_dir' =>
        [
            'signatureArguments' => '$root, $path',
            'arguments' => '$root, $path',
        ],
    'svn_fs_apply_text' =>
        [
            'signatureArguments' => '$root, $path',
            'arguments' => '$root, $path',
        ],
    'svn_fs_copy' =>
        [
            'signatureArguments' => '$from_root, $from_path, $to_root, $to_path',
            'arguments' => '$from_root, $from_path, $to_root, $to_path',
        ],
    'svn_fs_delete' =>
        [
            'signatureArguments' => '$root, $path',
            'arguments' => '$root, $path',
        ],
    'svn_fs_begin_txn2' =>
        [
            'signatureArguments' => '$repos, $rev',
            'arguments' => '$repos, $rev',
        ],
    'svn_fs_is_dir' =>
        [
            'signatureArguments' => '$root, $path',
            'arguments' => '$root, $path',
        ],
    'svn_fs_is_file' =>
        [
            'signatureArguments' => '$root, $path',
            'arguments' => '$root, $path',
        ],
    'svn_fs_node_prop' =>
        [
            'signatureArguments' => '$fsroot, $path, $propname',
            'arguments' => '$fsroot, $path, $propname',
        ],
    'svn_fs_change_node_prop' =>
        [
            'signatureArguments' => '$root, $path, $name, $value',
            'arguments' => '$root, $path, $name, $value',
        ],
    'svn_fs_contents_changed' =>
        [
            'signatureArguments' => '$root1, $path1, $root2, $path2',
            'arguments' => '$root1, $path1, $root2, $path2',
        ],
    'svn_fs_props_changed' =>
        [
            'signatureArguments' => '$root1, $path1, $root2, $path2',
            'arguments' => '$root1, $path1, $root2, $path2',
        ],
    'svn_fs_abort_txn' =>
        [
            'signatureArguments' => '$txn',
            'arguments' => '$txn',
        ],
    'xdiff_file_bdiff_size' =>
        [
            'signatureArguments' => 'string $file',
            'arguments' => '$file',
        ],
    'xdiff_file_bdiff' =>
        [
            'signatureArguments' => 'string $old_file, string $new_file, string $dest',
            'arguments' => '$old_file, $new_file, $dest',
        ],
    'xdiff_file_bpatch' =>
        [
            'signatureArguments' => 'string $file, string $patch, string $dest',
            'arguments' => '$file, $patch, $dest',
        ],
    'xdiff_file_diff_binary' =>
        [
            'signatureArguments' => 'string $old_file, string $new_file, string $dest',
            'arguments' => '$old_file, $new_file, $dest',
        ],
    'xdiff_file_merge3' =>
        [
            'signatureArguments' => 'string $old_file, string $new_file1, string $new_file2, string $dest',
            'arguments' => '$old_file, $new_file1, $new_file2, $dest',
        ],
    'xdiff_file_patch_binary' =>
        [
            'signatureArguments' => 'string $file, string $patch, string $dest',
            'arguments' => '$file, $patch, $dest',
        ],
    'xdiff_file_patch' =>
        [
            'signatureArguments' => 'string $file, string $patch, string $dest, int $flags = XDIFF_PATCH_NORMAL',
            'arguments' => '$file, $patch, $dest, $flags',
        ],
    'xdiff_file_rabdiff' =>
        [
            'signatureArguments' => 'string $old_file, string $new_file, string $dest',
            'arguments' => '$old_file, $new_file, $dest',
        ],
    'xdiff_string_bdiff_size' =>
        [
            'signatureArguments' => 'string $patch',
            'arguments' => '$patch',
        ],
    'xdiff_string_bdiff' =>
        [
            'signatureArguments' => 'string $old_data, string $new_data',
            'arguments' => '$old_data, $new_data',
        ],
    'xdiff_string_bpatch' =>
        [
            'signatureArguments' => 'string $str, string $patch',
            'arguments' => '$str, $patch',
        ],
    'xdiff_string_diff_binary' =>
        [
            'signatureArguments' => 'string $old_data, string $new_data',
            'arguments' => '$old_data, $new_data',
        ],
    'xdiff_string_diff' =>
        [
            'signatureArguments' => 'string $old_data, string $new_data, int $context = 3, bool $minimal = false',
            'arguments' => '$old_data, $new_data, $context, $minimal',
        ],
    'xdiff_string_merge3' =>
        [
            'signatureArguments' => 'string $old_data, string $new_data1, string $new_data2, ?string &$error',
            'arguments' => '$old_data, $new_data1, $new_data2, $error',
        ],
    'xdiff_string_patch_binary' =>
        [
            'signatureArguments' => 'string $str, string $patch',
            'arguments' => '$str, $patch',
        ],
    'xdiff_string_patch' =>
        [
            'signatureArguments' => 'string $str, string $patch, ?int $flags, ?string &$error',
            'arguments' => '$str, $patch, $flags, $error',
        ],
    'xdiff_string_rabdiff' =>
        [
            'signatureArguments' => 'string $old_data, string $new_data',
            'arguments' => '$old_data, $new_data',
        ],
    'GEOSVersion' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'GEOSSharedPaths' =>
        [
            'signatureArguments' => 'GEOSGeometry $geom1, GEOSGeometry $geom2',
            'arguments' => '$geom1, $geom2',
        ],
    'GEOSLineMerge' =>
        [
            'signatureArguments' => 'GEOSGeometry $geom',
            'arguments' => '$geom',
        ],
    'GEOSRelateMatch' =>
        [
            'signatureArguments' => 'string $matrix, string $pattern',
            'arguments' => '$matrix, $pattern',
        ],
    'GEOSPolygonize' =>
        [
            'signatureArguments' => 'GEOSGeometry $geom',
            'arguments' => '$geom',
        ],
    'gmp_init' =>
        [
            'signatureArguments' => 'string|int $num, int $base = 0',
            'arguments' => '$num, $base',
        ],
    'gmp_intval' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_random_seed' =>
        [
            'signatureArguments' => 'GMP|string|int $seed',
            'arguments' => '$seed',
        ],
    'gmp_strval' =>
        [
            'signatureArguments' => 'GMP|string|int $num, int $base = 10',
            'arguments' => '$num, $base',
        ],
    'gmp_add' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_sub' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_mul' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_div_qr' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2, int $rounding_mode = GMP_ROUND_ZERO',
            'arguments' => '$num1, $num2, $rounding_mode',
        ],
    'gmp_div_q' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2, int $rounding_mode = GMP_ROUND_ZERO',
            'arguments' => '$num1, $num2, $rounding_mode',
        ],
    'gmp_div_r' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2, int $rounding_mode = GMP_ROUND_ZERO',
            'arguments' => '$num1, $num2, $rounding_mode',
        ],
    'gmp_div' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2, int $rounding_mode = GMP_ROUND_ZERO',
            'arguments' => '$num1, $num2, $rounding_mode',
        ],
    'gmp_mod' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_divexact' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_neg' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_abs' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_fact' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_sqrt' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_sqrtrem' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_pow' =>
        [
            'signatureArguments' => 'GMP|string|int $num, int $exponent',
            'arguments' => '$num, $exponent',
        ],
    'gmp_powm' =>
        [
            'signatureArguments' => 'GMP|string|int $num, GMP|string|int $exponent, GMP|string|int $modulus',
            'arguments' => '$num, $exponent, $modulus',
        ],
    'gmp_perfect_square' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_prob_prime' =>
        [
            'signatureArguments' => 'GMP|string|int $num, int $repetitions = 10',
            'arguments' => '$num, $repetitions',
        ],
    'gmp_random_bits' =>
        [
            'signatureArguments' => 'int $bits',
            'arguments' => '$bits',
        ],
    'gmp_random_range' =>
        [
            'signatureArguments' => 'GMP|string|int $min, GMP|string|int $max',
            'arguments' => '$min, $max',
        ],
    'gmp_gcd' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_gcdext' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_invert' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_jacobi' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_legendre' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_cmp' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_sign' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_random' =>
        [
            'signatureArguments' => '$limiter = 20',
            'arguments' => '$limiter',
        ],
    'gmp_and' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_or' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_com' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_xor' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_setbit' =>
        [
            'signatureArguments' => 'GMP $num, int $index, bool $value = true',
            'arguments' => '$num, $index, $value',
        ],
    'gmp_clrbit' =>
        [
            'signatureArguments' => 'GMP $num, int $index',
            'arguments' => '$num, $index',
        ],
    'gmp_scan0' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, int $start',
            'arguments' => '$num1, $start',
        ],
    'gmp_scan1' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, int $start',
            'arguments' => '$num1, $start',
        ],
    'gmp_testbit' =>
        [
            'signatureArguments' => 'GMP|string|int $num, int $index',
            'arguments' => '$num, $index',
        ],
    'gmp_popcount' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_hamdist' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_import' =>
        [
            'signatureArguments' => 'string $data, int $word_size = 1, int $flags = GMP_MSW_FIRST|GMP_NATIVE_ENDIAN',
            'arguments' => '$data, $word_size, $flags',
        ],
    'gmp_export' =>
        [
            'signatureArguments' => 'GMP|string|int $num, int $word_size = 1, int $flags = GMP_MSW_FIRST|GMP_NATIVE_ENDIAN',
            'arguments' => '$num, $word_size, $flags',
        ],
    'gmp_root' =>
        [
            'signatureArguments' => 'GMP|string|int $num, int $nth',
            'arguments' => '$num, $nth',
        ],
    'gmp_rootrem' =>
        [
            'signatureArguments' => 'GMP|string|int $num, int $nth',
            'arguments' => '$num, $nth',
        ],
    'gmp_nextprime' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'gmp_binomial' =>
        [
            'signatureArguments' => 'GMP|string|int $n, int $k',
            'arguments' => '$n, $k',
        ],
    'gmp_kronecker' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_lcm' =>
        [
            'signatureArguments' => 'GMP|string|int $num1, GMP|string|int $num2',
            'arguments' => '$num1, $num2',
        ],
    'gmp_perfect_power' =>
        [
            'signatureArguments' => 'GMP|string|int $num',
            'arguments' => '$num',
        ],
    'posix_kill' =>
        [
            'signatureArguments' => 'int $process_id, int $signal',
            'arguments' => '$process_id, $signal',
        ],
    'posix_getpid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_getppid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_getuid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_setuid' =>
        [
            'signatureArguments' => 'int $user_id',
            'arguments' => '$user_id',
        ],
    'posix_geteuid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_seteuid' =>
        [
            'signatureArguments' => 'int $user_id',
            'arguments' => '$user_id',
        ],
    'posix_setrlimit' =>
        [
            'signatureArguments' => 'int $resource, int $soft_limit, int $hard_limit',
            'arguments' => '$resource, $soft_limit, $hard_limit',
        ],
    'posix_getgid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_setgid' =>
        [
            'signatureArguments' => 'int $group_id',
            'arguments' => '$group_id',
        ],
    'posix_getegid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_setegid' =>
        [
            'signatureArguments' => 'int $group_id',
            'arguments' => '$group_id',
        ],
    'posix_getgroups' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_getlogin' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_getpgrp' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_setsid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_setpgid' =>
        [
            'signatureArguments' => 'int $process_id, int $process_group_id',
            'arguments' => '$process_id, $process_group_id',
        ],
    'posix_getpgid' =>
        [
            'signatureArguments' => 'int $process_id',
            'arguments' => '$process_id',
        ],
    'posix_getsid' =>
        [
            'signatureArguments' => 'int $process_id',
            'arguments' => '$process_id',
        ],
    'posix_uname' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_times' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_ctermid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_ttyname' =>
        [
            'signatureArguments' => '$file_descriptor',
            'arguments' => '$file_descriptor',
        ],
    'posix_isatty' =>
        [
            'signatureArguments' => '$file_descriptor',
            'arguments' => '$file_descriptor',
        ],
    'posix_getcwd' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_mkfifo' =>
        [
            'signatureArguments' => 'string $filename, int $permissions',
            'arguments' => '$filename, $permissions',
        ],
    'posix_mknod' =>
        [
            'signatureArguments' => 'string $filename, int $flags, int $major = 0, int $minor = 0',
            'arguments' => '$filename, $flags, $major, $minor',
        ],
    'posix_access' =>
        [
            'signatureArguments' => 'string $filename, int $flags = POSIX_F_OK',
            'arguments' => '$filename, $flags',
        ],
    'posix_getgrnam' =>
        [
            'signatureArguments' => 'string $name',
            'arguments' => '$name',
        ],
    'posix_getgrgid' =>
        [
            'signatureArguments' => 'int $group_id',
            'arguments' => '$group_id',
        ],
    'posix_getpwnam' =>
        [
            'signatureArguments' => 'string $username',
            'arguments' => '$username',
        ],
    'posix_getpwuid' =>
        [
            'signatureArguments' => 'int $user_id',
            'arguments' => '$user_id',
        ],
    'posix_getrlimit' =>
        [
            'signatureArguments' => '?int $resource = null',
            'arguments' => '$resource',
        ],
    'posix_get_last_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_errno' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'posix_strerror' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'posix_initgroups' =>
        [
            'signatureArguments' => 'string $username, int $group_id',
            'arguments' => '$username, $group_id',
        ],
    'posix_sysconf' =>
        [
            'signatureArguments' => 'int $conf_id',
            'arguments' => '$conf_id',
        ],
    'posix_eaccess' =>
        [
            'signatureArguments' => 'string $filename, int $flags = 0',
            'arguments' => '$filename, $flags',
        ],
    'spl_classes' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'spl_autoload' =>
        [
            'signatureArguments' => 'string $class, ?string $file_extensions',
            'arguments' => '$class, $file_extensions',
        ],
    'spl_autoload_extensions' =>
        [
            'signatureArguments' => '?string $file_extensions',
            'arguments' => '$file_extensions',
        ],
    'spl_autoload_register' =>
        [
            'signatureArguments' => '?callable $callback, bool $throw = true, bool $prepend = false',
            'arguments' => '$callback, $throw, $prepend',
        ],
    'spl_autoload_unregister' =>
        [
            'signatureArguments' => 'callable $callback',
            'arguments' => '$callback',
        ],
    'spl_autoload_functions' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'spl_autoload_call' =>
        [
            'signatureArguments' => 'string $class',
            'arguments' => '$class',
        ],
    'class_parents' =>
        [
            'signatureArguments' => '$object_or_class, bool $autoload = true',
            'arguments' => '$object_or_class, $autoload',
        ],
    'class_implements' =>
        [
            'signatureArguments' => '$object_or_class, bool $autoload = true',
            'arguments' => '$object_or_class, $autoload',
        ],
    'spl_object_hash' =>
        [
            'signatureArguments' => 'object $object',
            'arguments' => '$object',
        ],
    'iterator_to_array' =>
        [
            'signatureArguments' => '$iterator, bool $preserve_keys = true',
            'arguments' => '$iterator, $preserve_keys',
        ],
    'iterator_count' =>
        [
            'signatureArguments' => '$iterator',
            'arguments' => '$iterator',
        ],
    'iterator_apply' =>
        [
            'signatureArguments' => 'Traversable $iterator, callable $callback, ?array $args',
            'arguments' => '$iterator, $callback, $args',
        ],
    'class_uses' =>
        [
            'signatureArguments' => '$object_or_class, bool $autoload = true',
            'arguments' => '$object_or_class, $autoload',
        ],
    'spl_object_id' =>
        [
            'signatureArguments' => 'object $object',
            'arguments' => '$object',
        ],
    'ftp_mlsd' =>
        [
            'signatureArguments' => '$ftp, string $directory',
            'arguments' => '$ftp, $directory',
        ],
    'ftp_connect' =>
        [
            'signatureArguments' => 'string $hostname, int $port = 21, int $timeout = 90',
            'arguments' => '$hostname, $port, $timeout',
        ],
    'ftp_ssl_connect' =>
        [
            'signatureArguments' => 'string $hostname, int $port = 21, int $timeout = 90',
            'arguments' => '$hostname, $port, $timeout',
        ],
    'ftp_login' =>
        [
            'signatureArguments' => '$ftp, string $username, string $password',
            'arguments' => '$ftp, $username, $password',
        ],
    'ftp_pwd' =>
        [
            'signatureArguments' => '$ftp',
            'arguments' => '$ftp',
        ],
    'ftp_cdup' =>
        [
            'signatureArguments' => '$ftp',
            'arguments' => '$ftp',
        ],
    'ftp_chdir' =>
        [
            'signatureArguments' => '$ftp, string $directory',
            'arguments' => '$ftp, $directory',
        ],
    'ftp_exec' =>
        [
            'signatureArguments' => '$ftp, string $command',
            'arguments' => '$ftp, $command',
        ],
    'ftp_raw' =>
        [
            'signatureArguments' => '$ftp, string $command',
            'arguments' => '$ftp, $command',
        ],
    'ftp_mkdir' =>
        [
            'signatureArguments' => '$ftp, string $directory',
            'arguments' => '$ftp, $directory',
        ],
    'ftp_rmdir' =>
        [
            'signatureArguments' => '$ftp, string $directory',
            'arguments' => '$ftp, $directory',
        ],
    'ftp_chmod' =>
        [
            'signatureArguments' => '$ftp, int $permissions, string $filename',
            'arguments' => '$ftp, $permissions, $filename',
        ],
    'ftp_alloc' =>
        [
            'signatureArguments' => '$ftp, int $size, &$response',
            'arguments' => '$ftp, $size, $response',
        ],
    'ftp_nlist' =>
        [
            'signatureArguments' => '$ftp, string $directory',
            'arguments' => '$ftp, $directory',
        ],
    'ftp_rawlist' =>
        [
            'signatureArguments' => '$ftp, string $directory, bool $recursive = false',
            'arguments' => '$ftp, $directory, $recursive',
        ],
    'ftp_systype' =>
        [
            'signatureArguments' => '$ftp',
            'arguments' => '$ftp',
        ],
    'ftp_pasv' =>
        [
            'signatureArguments' => '$ftp, bool $enable',
            'arguments' => '$ftp, $enable',
        ],
    'ftp_size' =>
        [
            'signatureArguments' => '$ftp, string $filename',
            'arguments' => '$ftp, $filename',
        ],
    'ftp_mdtm' =>
        [
            'signatureArguments' => '$ftp, string $filename',
            'arguments' => '$ftp, $filename',
        ],
    'ftp_rename' =>
        [
            'signatureArguments' => '$ftp, string $from, string $to',
            'arguments' => '$ftp, $from, $to',
        ],
    'ftp_delete' =>
        [
            'signatureArguments' => '$ftp, string $filename',
            'arguments' => '$ftp, $filename',
        ],
    'ftp_site' =>
        [
            'signatureArguments' => '$ftp, string $command',
            'arguments' => '$ftp, $command',
        ],
    'ftp_close' =>
        [
            'signatureArguments' => '$ftp',
            'arguments' => '$ftp',
        ],
    'ftp_set_option' =>
        [
            'signatureArguments' => 'int $option, $value',
            'arguments' => '$option, $value',
        ],
    'ftp_get_option' =>
        [
            'signatureArguments' => 'int $option',
            'arguments' => '$option',
        ],
    'ftp_nb_continue' =>
        [
            'signatureArguments' => '$ftp',
            'arguments' => '$ftp',
        ],
    'ftp_quit' =>
        [
            'signatureArguments' => '$ftp',
            'arguments' => '$ftp',
        ],
    'uopz_add_function' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_allow_exit' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_del_function' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_extend' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_flags' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_get_exit_status' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uopz_get_hook' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_get_mock' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_get_property' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_get_return' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_get_static' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_implement' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_redefine' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_set_hook' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_set_mock' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_set_property' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_set_return' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_set_static' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_undefine' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_unset_hook' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_unset_mock' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_unset_return' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_call_user_func' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'uopz_call_user_func_array' =>
        [
            'signatureArguments' => '...$arguments',
            'arguments' => '$arguments',
        ],
    'msgpack_serialize' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'msgpack_unserialize' =>
        [
            'signatureArguments' => '$str, $object = null',
            'arguments' => '$str, $object',
        ],
    'msgpack_pack' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'msgpack_unpack' =>
        [
            'signatureArguments' => '$str, $object = null',
            'arguments' => '$str, $object',
        ],
    'win32_continue_service' =>
        [
            'signatureArguments' => '$serviceName, $machine = ""',
            'arguments' => '$serviceName, $machine',
        ],
    'win32_create_service' =>
        [
            'signatureArguments' => '$details, $machine = ""',
            'arguments' => '$details, $machine',
        ],
    'win32_delete_service' =>
        [
            'signatureArguments' => '$serviceName, $machine = ""',
            'arguments' => '$serviceName, $machine',
        ],
    'win32_get_last_control_message' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'win32_pause_service' =>
        [
            'signatureArguments' => '$serviceName, $machine = ""',
            'arguments' => '$serviceName, $machine',
        ],
    'win32_query_service_status' =>
        [
            'signatureArguments' => '$serviceName, $machine = ""',
            'arguments' => '$serviceName, $machine',
        ],
    'win32_set_service_status' =>
        [
            'signatureArguments' => '$status, $checkpoint = 0',
            'arguments' => '$status, $checkpoint',
        ],
    'win32_start_service_ctrl_dispatcher' =>
        [
            'signatureArguments' => '$name',
            'arguments' => '$name',
        ],
    'win32_start_service' =>
        [
            'signatureArguments' => '$serviceName, $machine = ""',
            'arguments' => '$serviceName, $machine',
        ],
    'win32_stop_service' =>
        [
            'signatureArguments' => '$serviceName, $machine = ""',
            'arguments' => '$serviceName, $machine',
        ],
    'swoole_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_cpu_num' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_last_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_async_dns_lookup_coro' =>
        [
            'signatureArguments' => '$domain_name, $timeout = null, $type = null',
            'arguments' => '$domain_name, $timeout, $type',
        ],
    'swoole_async_set' =>
        [
            'signatureArguments' => '$settings',
            'arguments' => '$settings',
        ],
    'swoole_coroutine_create' =>
        [
            'signatureArguments' => 'callable $func, ...$params',
            'arguments' => '$func, $params',
        ],
    'swoole_coroutine_defer' =>
        [
            'signatureArguments' => 'callable $callback',
            'arguments' => '$callback',
        ],
    'swoole_coroutine_socketpair' =>
        [
            'signatureArguments' => '$domain, $type, $protocol',
            'arguments' => '$domain, $type, $protocol',
        ],
    'swoole_test_kernel_coroutine' =>
        [
            'signatureArguments' => '$count = null, $sleep_time = null',
            'arguments' => '$count, $sleep_time',
        ],
    'swoole_client_select' =>
        [
            'signatureArguments' => '&$read_array, &$write_array, &$error_array, $timeout = null',
            'arguments' => '$read_array, $write_array, $error_array, $timeout',
        ],
    'swoole_select' =>
        [
            'signatureArguments' => '&$read_array, &$write_array, &$error_array, $timeout = null',
            'arguments' => '$read_array, $write_array, $error_array, $timeout',
        ],
    'swoole_set_process_name' =>
        [
            'signatureArguments' => '$process_name',
            'arguments' => '$process_name',
        ],
    'swoole_get_local_ip' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_get_local_mac' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_strerror' =>
        [
            'signatureArguments' => '$errno, $error_type = null',
            'arguments' => '$errno, $error_type',
        ],
    'swoole_errno' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_clear_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_error_log' =>
        [
            'signatureArguments' => 'int $level, string $msg',
            'arguments' => '$level, $msg',
        ],
    'swoole_error_log_ex' =>
        [
            'signatureArguments' => 'int $level, int $error, string $msg',
            'arguments' => '$level, $error, $msg',
        ],
    'swoole_ignore_error' =>
        [
            'signatureArguments' => 'int $error',
            'arguments' => '$error',
        ],
    'swoole_hashcode' =>
        [
            'signatureArguments' => '$data, $type = null',
            'arguments' => '$data, $type',
        ],
    'swoole_mime_type_add' =>
        [
            'signatureArguments' => '$suffix, $mime_type',
            'arguments' => '$suffix, $mime_type',
        ],
    'swoole_mime_type_set' =>
        [
            'signatureArguments' => '$suffix, $mime_type',
            'arguments' => '$suffix, $mime_type',
        ],
    'swoole_mime_type_delete' =>
        [
            'signatureArguments' => '$suffix',
            'arguments' => '$suffix',
        ],
    'swoole_mime_type_get' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'swoole_get_mime_type' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'swoole_mime_type_exists' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'swoole_mime_type_list' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_clear_dns_cache' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_substr_unserialize' =>
        [
            'signatureArguments' => '$str, $offset, $length = null, $options = null',
            'arguments' => '$str, $offset, $length, $options',
        ],
    'swoole_substr_json_decode' =>
        [
            'signatureArguments' => '$json, $offset, $length = null, $associative = null, $depth = null, $flags = null',
            'arguments' => '$json, $offset, $length, $associative, $depth, $flags',
        ],
    'swoole_internal_call_user_shutdown_begin' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_get_objects' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_get_vm_status' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_get_object_by_handle' =>
        [
            'signatureArguments' => 'int $handle',
            'arguments' => '$handle',
        ],
    'go' =>
        [
            'signatureArguments' => 'callable $func, ...$params',
            'arguments' => '$func, $params',
        ],
    'defer' =>
        [
            'signatureArguments' => 'callable $callback',
            'arguments' => '$callback',
        ],
    'swoole_event_add' =>
        [
            'signatureArguments' => '$fd, $read_callback, $write_callback = null, $events = null',
            'arguments' => '$fd, $read_callback, $write_callback, $events',
        ],
    'swoole_event_del' =>
        [
            'signatureArguments' => '$fd',
            'arguments' => '$fd',
        ],
    'swoole_event_set' =>
        [
            'signatureArguments' => '$fd, $read_callback = null, $write_callback = null, $events = null',
            'arguments' => '$fd, $read_callback, $write_callback, $events',
        ],
    'swoole_event_isset' =>
        [
            'signatureArguments' => '$fd, $events = null',
            'arguments' => '$fd, $events',
        ],
    'swoole_event_dispatch' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_event_defer' =>
        [
            'signatureArguments' => 'callable $callback',
            'arguments' => '$callback',
        ],
    'swoole_event_cycle' =>
        [
            'signatureArguments' => '$callback, $before = null',
            'arguments' => '$callback, $before',
        ],
    'swoole_event_write' =>
        [
            'signatureArguments' => '$fd, $data',
            'arguments' => '$fd, $data',
        ],
    'swoole_event_wait' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_event_exit' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_timer_set' =>
        [
            'signatureArguments' => 'array $settings',
            'arguments' => '$settings',
        ],
    'swoole_timer_after' =>
        [
            'signatureArguments' => 'int $ms, callable $callback, ...$params',
            'arguments' => '$ms, $callback, $params',
        ],
    'swoole_timer_tick' =>
        [
            'signatureArguments' => 'int $ms, callable $callback, ...$params',
            'arguments' => '$ms, $callback, $params',
        ],
    'swoole_timer_exists' =>
        [
            'signatureArguments' => 'int $timer_id',
            'arguments' => '$timer_id',
        ],
    'swoole_timer_info' =>
        [
            'signatureArguments' => 'int $timer_id',
            'arguments' => '$timer_id',
        ],
    'swoole_timer_stats' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_timer_list' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'swoole_timer_clear' =>
        [
            'signatureArguments' => 'int $timer_id',
            'arguments' => '$timer_id',
        ],
    'swoole_timer_clear_all' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_info' =>
        [
            'signatureArguments' => 'string $category = \'null\'',
            'arguments' => '$category',
        ],
    'config_get_hash' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_stack_depth' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_function_stack' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_print_function_stack' =>
        [
            'signatureArguments' => 'string $message = \'user triggered\', int $options = 0',
            'arguments' => '$message, $options',
        ],
    'xdebug_get_declared_vars' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_call_file' =>
        [
            'signatureArguments' => 'int $depth = 2',
            'arguments' => '$depth',
        ],
    'xdebug_call_class' =>
        [
            'signatureArguments' => 'int $depth = 2',
            'arguments' => '$depth',
        ],
    'xdebug_call_function' =>
        [
            'signatureArguments' => 'int $depth = 2',
            'arguments' => '$depth',
        ],
    'xdebug_call_line' =>
        [
            'signatureArguments' => 'int $depth = 2',
            'arguments' => '$depth',
        ],
    'xdebug_start_function_monitor' =>
        [
            'signatureArguments' => 'array $listOfFunctionsToMonitor',
            'arguments' => '$listOfFunctionsToMonitor',
        ],
    'xdebug_stop_function_monitor' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_monitored_functions' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_var_dump' =>
        [
            'signatureArguments' => 'mixed ...$variable',
            'arguments' => '$variable',
        ],
    'xdebug_debug_zval' =>
        [
            'signatureArguments' => 'string ...$varname',
            'arguments' => '$varname',
        ],
    'xdebug_debug_zval_stdout' =>
        [
            'signatureArguments' => 'string ...$varname',
            'arguments' => '$varname',
        ],
    'xdebug_enable' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_disable' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_is_enabled' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_start_error_collection' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_stop_error_collection' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_collected_errors' =>
        [
            'signatureArguments' => 'bool $emptyList = false',
            'arguments' => '$emptyList',
        ],
    'xdebug_break' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_start_trace' =>
        [
            'signatureArguments' => '?string $traceFile = null, int $options = 0',
            'arguments' => '$traceFile, $options',
        ],
    'xdebug_stop_trace' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_tracefile_name' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_profiler_filename' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_dump_aggr_profiling_data' =>
        [
            'signatureArguments' => '$prefix',
            'arguments' => '$prefix',
        ],
    'xdebug_clear_aggr_profiling_data' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_memory_usage' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_peak_memory_usage' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_time_index' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_start_code_coverage' =>
        [
            'signatureArguments' => 'int $options = 0',
            'arguments' => '$options',
        ],
    'xdebug_stop_code_coverage' =>
        [
            'signatureArguments' => 'bool $cleanUp = true',
            'arguments' => '$cleanUp',
        ],
    'xdebug_code_coverage_started' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_code_coverage' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_function_count' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_dump_superglobals' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_headers' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_formatted_function_stack' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_is_debugger_active' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_start_gcstats' =>
        [
            'signatureArguments' => '?string $gcstatsFile = null',
            'arguments' => '$gcstatsFile',
        ],
    'xdebug_stop_gcstats' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_gcstats_filename' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_gc_run_count' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_get_gc_total_collected_roots' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_set_filter' =>
        [
            'signatureArguments' => 'int $group, int $listType, array $configuration',
            'arguments' => '$group, $listType, $configuration',
        ],
    'xdebug_connect_to_client' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xdebug_notify' =>
        [
            'signatureArguments' => 'mixed $data',
            'arguments' => '$data',
        ],
    'db2_connect' =>
        [
            'signatureArguments' => 'string $database, ?string $username, ?string $password, array $options = []',
            'arguments' => '$database, $username, $password, $options',
        ],
    'db2_commit' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'db2_pconnect' =>
        [
            'signatureArguments' => 'string $database, ?string $username, ?string $password, array $options = []',
            'arguments' => '$database, $username, $password, $options',
        ],
    'db2_pclose' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'db2_autocommit' =>
        [
            'signatureArguments' => '$connection, int $value = null',
            'arguments' => '$connection, $value',
        ],
    'db2_bind_param' =>
        [
            'signatureArguments' => '$stmt, int $parameter_number, string $variable_name, int $parameter_type = DB2_PARAM_IN, int $data_type = 0, int $precision = -1, int $scale = 0',
            'arguments' => '$stmt, $parameter_number, $variable_name, $parameter_type, $data_type, $precision, $scale',
        ],
    'db2_close' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'db2_column_privileges' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier = null, ?string $schema = null, ?string $table_name = null, ?string $column_name = null',
            'arguments' => '$connection, $qualifier, $schema, $table_name, $column_name',
        ],
    'db2_columnprivileges' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'db2_columns' =>
        [
            'signatureArguments' => '$connection, $qualifier = null, $schema = null, $table_name = null, $column_name = null',
            'arguments' => '$connection, $qualifier, $schema, $table_name, $column_name',
        ],
    'db2_foreign_keys' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier, ?string $schema, string $table_name',
            'arguments' => '$connection, $qualifier, $schema, $table_name',
        ],
    'db2_foreignkeys' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'db2_primary_keys' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier, ?string $schema, string $table_name',
            'arguments' => '$connection, $qualifier, $schema, $table_name',
        ],
    'db2_primarykeys' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'db2_procedure_columns' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier, string $schema, string $procedure, ?string $parameter',
            'arguments' => '$connection, $qualifier, $schema, $procedure, $parameter',
        ],
    'db2_procedurecolumns' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'db2_procedures' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier, string $schema, string $procedure',
            'arguments' => '$connection, $qualifier, $schema, $procedure',
        ],
    'db2_special_columns' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier, string $schema, string $table_name, int $scope',
            'arguments' => '$connection, $qualifier, $schema, $table_name, $scope',
        ],
    'db2_specialcolumns' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'db2_statistics' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier, ?string $schema, string $table_name, bool $unique',
            'arguments' => '$connection, $qualifier, $schema, $table_name, $unique',
        ],
    'db2_table_privileges' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier = null, ?string $schema = null, ?string $table_name = null',
            'arguments' => '$connection, $qualifier, $schema, $table_name',
        ],
    'db2_tableprivileges' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'db2_tables' =>
        [
            'signatureArguments' => '$connection, ?string $qualifier = null, ?string $schema = null, ?string $table_name = null, ?string $table_type = null',
            'arguments' => '$connection, $qualifier, $schema, $table_name, $table_type',
        ],
    'db2_exec' =>
        [
            'signatureArguments' => '$connection, string $statement, array $options = []',
            'arguments' => '$connection, $statement, $options',
        ],
    'db2_prepare' =>
        [
            'signatureArguments' => '$connection, string $statement, array $options = []',
            'arguments' => '$connection, $statement, $options',
        ],
    'db2_execute' =>
        [
            'signatureArguments' => '$stmt, array $parameters = []',
            'arguments' => '$stmt, $parameters',
        ],
    'db2_stmt_errormsg' =>
        [
            'signatureArguments' => '$stmt = null',
            'arguments' => '$stmt',
        ],
    'db2_conn_errormsg' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'db2_conn_error' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'db2_stmt_error' =>
        [
            'signatureArguments' => '$stmt = null',
            'arguments' => '$stmt',
        ],
    'db2_next_result' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'db2_num_fields' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'db2_num_rows' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'db2_field_name' =>
        [
            'signatureArguments' => '$stmt, int|string $column',
            'arguments' => '$stmt, $column',
        ],
    'db2_field_display_size' =>
        [
            'signatureArguments' => '$stmt, int|string $column',
            'arguments' => '$stmt, $column',
        ],
    'db2_field_num' =>
        [
            'signatureArguments' => '$stmt, int|string $column',
            'arguments' => '$stmt, $column',
        ],
    'db2_field_precision' =>
        [
            'signatureArguments' => '$stmt, int|string $column',
            'arguments' => '$stmt, $column',
        ],
    'db2_field_scale' =>
        [
            'signatureArguments' => '$stmt, int|string $column',
            'arguments' => '$stmt, $column',
        ],
    'db2_field_type' =>
        [
            'signatureArguments' => '$stmt, int|string $column',
            'arguments' => '$stmt, $column',
        ],
    'db2_field_width' =>
        [
            'signatureArguments' => '$stmt, int|string $column',
            'arguments' => '$stmt, $column',
        ],
    'db2_cursor_type' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'db2_rollback' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'db2_free_stmt' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'db2_result' =>
        [
            'signatureArguments' => '$stmt, int|string $column',
            'arguments' => '$stmt, $column',
        ],
    'db2_fetch_row' =>
        [
            'signatureArguments' => '$stmt, int $row_number = null',
            'arguments' => '$stmt, $row_number',
        ],
    'db2_fetch_assoc' =>
        [
            'signatureArguments' => '$stmt, int $row_number = null',
            'arguments' => '$stmt, $row_number',
        ],
    'db2_fetch_array' =>
        [
            'signatureArguments' => '$stmt, int $row_number = null',
            'arguments' => '$stmt, $row_number',
        ],
    'db2_fetch_both' =>
        [
            'signatureArguments' => '$stmt, int $row_number = null',
            'arguments' => '$stmt, $row_number',
        ],
    'db2_free_result' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'db2_set_option' =>
        [
            'signatureArguments' => '$resource, array $options, int $type',
            'arguments' => '$resource, $options, $type',
        ],
    'db2_setoption' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'db2_fetch_object' =>
        [
            'signatureArguments' => '$stmt, int $row_number = null',
            'arguments' => '$stmt, $row_number',
        ],
    'db2_server_info' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'db2_client_info' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'db2_escape_string' =>
        [
            'signatureArguments' => 'string $string_literal',
            'arguments' => '$string_literal',
        ],
    'db2_lob_read' =>
        [
            'signatureArguments' => '$stmt, int $colnum, int $length',
            'arguments' => '$stmt, $colnum, $length',
        ],
    'db2_get_option' =>
        [
            'signatureArguments' => '$resource, string $option',
            'arguments' => '$resource, $option',
        ],
    'db2_last_insert_id' =>
        [
            'signatureArguments' => '$resource',
            'arguments' => '$resource',
        ],
    'bootstrap' =>
        [
            'signatureArguments' => 'string $file',
            'arguments' => '$file',
        ],
    'run' =>
        [
            'signatureArguments' => 'Closure $task, array $argv = null',
            'arguments' => '$task, $argv',
        ],
    'count' =>
        [
            'signatureArguments' => 'Countable|array $value, int $mode = COUNT_NORMAL',
            'arguments' => '$value, $mode',
        ],
    'wb_main_loop' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wb_find_file' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'wb_message_box' =>
        [
            'signatureArguments' => '$parent, $message, $title = null, $style = null',
            'arguments' => '$parent, $message, $title, $style',
        ],
    'wb_play_sound' =>
        [
            'signatureArguments' => '$source, $command = null',
            'arguments' => '$source, $command',
        ],
    'wb_stop_sound' =>
        [
            'signatureArguments' => '$command = null',
            'arguments' => '$command',
        ],
    'wb_exec' =>
        [
            'signatureArguments' => '$command, $param = null',
            'arguments' => '$command, $param',
        ],
    'wb_get_system_info' =>
        [
            'signatureArguments' => '$info',
            'arguments' => '$info',
        ],
    'wb_get_registry_key' =>
        [
            'signatureArguments' => '$key, $subkey, $entry = null',
            'arguments' => '$key, $subkey, $entry',
        ],
    'wb_set_registry_key' =>
        [
            'signatureArguments' => '$key, $subkey, $entry = null, $value = null',
            'arguments' => '$key, $subkey, $entry, $value',
        ],
    'wb_create_timer' =>
        [
            'signatureArguments' => '$window, $id, $interval',
            'arguments' => '$window, $id, $interval',
        ],
    'wb_wait' =>
        [
            'signatureArguments' => '$window = null, $pause = null, $flags = null',
            'arguments' => '$window, $pause, $flags',
        ],
    'wb_destroy_timer' =>
        [
            'signatureArguments' => '$window, $id',
            'arguments' => '$window, $id',
        ],
    'wb_load_image' =>
        [
            'signatureArguments' => '$filename, $index = null, $param = null',
            'arguments' => '$filename, $index, $param',
        ],
    'wb_save_image' =>
        [
            'signatureArguments' => '$image, $filename',
            'arguments' => '$image, $filename',
        ],
    'wb_create_image' =>
        [
            'signatureArguments' => '$width = 0, $height = 0, $dibbmi = null, $dibbits = null',
            'arguments' => '$width, $height, $dibbmi, $dibbits',
        ],
    'wb_create_mask' =>
        [
            'signatureArguments' => '$bitmap, $transparent_color',
            'arguments' => '$bitmap, $transparent_color',
        ],
    'wb_destroy_image' =>
        [
            'signatureArguments' => '$image',
            'arguments' => '$image',
        ],
    'wb_get_image_data' =>
        [
            'signatureArguments' => '$image, $compress4to3',
            'arguments' => '$image, $compress4to3',
        ],
    'wb_get_pixel' =>
        [
            'signatureArguments' => '$source, $xpos, $ypos',
            'arguments' => '$source, $xpos, $ypos',
        ],
    'wb_draw_point' =>
        [
            'signatureArguments' => '$source, $xpos, $ypos, $color',
            'arguments' => '$source, $xpos, $ypos, $color',
        ],
    'wb_draw_line' =>
        [
            'signatureArguments' => '$target, $x0, $y0, $x1, $y1, $color, $linewidth = null, $linestyle = null',
            'arguments' => '$target, $x0, $y0, $x1, $y1, $color, $linewidth, $linestyle',
        ],
    'wb_draw_rect' =>
        [
            'signatureArguments' => '$target, $xpos, $ypos, $width, $height, $color, $filled = null, $linewidth = null, $linestyle = null',
            'arguments' => '$target, $xpos, $ypos, $width, $height, $color, $filled, $linewidth, $linestyle',
        ],
    'wb_draw_ellipse' =>
        [
            'signatureArguments' => '$target, $xpos, $ypos, $width, $height, $color, $filled = null, $linewidth = null, $linestyle = null',
            'arguments' => '$target, $xpos, $ypos, $width, $height, $color, $filled, $linewidth, $linestyle',
        ],
    'wb_draw_text' =>
        [
            'signatureArguments' => '$target, $text, $xpos, $ypos, $width = null, $height = null, $font = null, $flags = null',
            'arguments' => '$target, $text, $xpos, $ypos, $width, $height, $font, $flags',
        ],
    'wb_draw_image' =>
        [
            'signatureArguments' => '$target, $bitmap, $xpos = 0, $ypos = 0, $width = null, $height = null, $transparentcolor = null, $xoffset = null, $yoffset = null',
            'arguments' => '$target, $bitmap, $xpos, $ypos, $width, $height, $transparentcolor, $xoffset, $yoffset',
        ],
    'wb_destroy_control' =>
        [
            'signatureArguments' => '$control',
            'arguments' => '$control',
        ],
    'wb_get_value' =>
        [
            'signatureArguments' => '$wbobject, $item = -1, $subitem = -1',
            'arguments' => '$wbobject, $item, $subitem',
        ],
    'wb_refresh' =>
        [
            'signatureArguments' => '$wbobject, $now = null, $xpos = null, $ypos = null, $width = null, $height = null',
            'arguments' => '$wbobject, $now, $xpos, $ypos, $width, $height',
        ],
    'wb_set_enabled' =>
        [
            'signatureArguments' => '$control, $enabled',
            'arguments' => '$control, $enabled',
        ],
    'wb_set_image' =>
        [
            'signatureArguments' => '$wbobject, $source, $transparentcolor = null, $index = null, $param = null',
            'arguments' => '$wbobject, $source, $transparentcolor, $index, $param',
        ],
    'wb_set_item_image' =>
        [
            'signatureArguments' => '$wbobject, $index, $item = null, $subitem = null',
            'arguments' => '$wbobject, $index, $item, $subitem',
        ],
    'wb_delete_items' =>
        [
            'signatureArguments' => '$ctrl, $items = null',
            'arguments' => '$ctrl, $items',
        ],
    'wb_get_class' =>
        [
            'signatureArguments' => '$wbobject',
            'arguments' => '$wbobject',
        ],
    'wb_get_control' =>
        [
            'signatureArguments' => '$wbobject, $id',
            'arguments' => '$wbobject, $id',
        ],
    'wb_get_enabled' =>
        [
            'signatureArguments' => '$wbobject',
            'arguments' => '$wbobject',
        ],
    'wb_get_focus' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wb_get_id' =>
        [
            'signatureArguments' => '$wbobject',
            'arguments' => '$wbobject',
        ],
    'wb_get_item_count' =>
        [
            'signatureArguments' => '$wbobject',
            'arguments' => '$wbobject',
        ],
    'wb_get_parent' =>
        [
            'signatureArguments' => '$wbobject, $item = null',
            'arguments' => '$wbobject, $item',
        ],
    'wb_get_selected' =>
        [
            'signatureArguments' => '$wbobject',
            'arguments' => '$wbobject',
        ],
    'wb_get_state' =>
        [
            'signatureArguments' => '$wbobject, $item = null',
            'arguments' => '$wbobject, $item',
        ],
    'wb_get_visible' =>
        [
            'signatureArguments' => '$wbobject',
            'arguments' => '$wbobject',
        ],
    'wb_set_cursor' =>
        [
            'signatureArguments' => '$wbobject, $source',
            'arguments' => '$wbobject, $source',
        ],
    'wb_set_focus' =>
        [
            'signatureArguments' => '$wbobject',
            'arguments' => '$wbobject',
        ],
    'wb_set_handler' =>
        [
            'signatureArguments' => '$window, $fn_handler',
            'arguments' => '$window, $fn_handler',
        ],
    'wb_set_location' =>
        [
            'signatureArguments' => '$wbobject, $location',
            'arguments' => '$wbobject, $location',
        ],
    'wb_set_range' =>
        [
            'signatureArguments' => '$control, $vmin, $vmax',
            'arguments' => '$control, $vmin, $vmax',
        ],
    'wb_set_state' =>
        [
            'signatureArguments' => '$wbobject, $item, $state',
            'arguments' => '$wbobject, $item, $state',
        ],
    'wb_set_style' =>
        [
            'signatureArguments' => '$wbobject, $style, $set',
            'arguments' => '$wbobject, $style, $set',
        ],
    'wb_set_visible' =>
        [
            'signatureArguments' => '$wbobject, $visible',
            'arguments' => '$wbobject, $visible',
        ],
    'wb_sort' =>
        [
            'signatureArguments' => '$control, $ascending = null, $subitem = null',
            'arguments' => '$control, $ascending, $subitem',
        ],
    'wb_get_level' =>
        [
            'signatureArguments' => '$wbobject, $item',
            'arguments' => '$wbobject, $item',
        ],
    'wb_create_font' =>
        [
            'signatureArguments' => '$name, $height, $color = null, $flags = null',
            'arguments' => '$name, $height, $color, $flags',
        ],
    'wb_destroy_font' =>
        [
            'signatureArguments' => '$nfont',
            'arguments' => '$nfont',
        ],
    'wb_set_font' =>
        [
            'signatureArguments' => '$control, $font = null, $redraw = null',
            'arguments' => '$control, $font, $redraw',
        ],
    'wb_get_address' =>
        [
            'signatureArguments' => '$var',
            'arguments' => '$var',
        ],
    'wb_send_message' =>
        [
            'signatureArguments' => '$wbobject, $message, $wparam = 0, $lparam = 0',
            'arguments' => '$wbobject, $message, $wparam, $lparam',
        ],
    'wb_peek' =>
        [
            'signatureArguments' => '$address, $length = 0',
            'arguments' => '$address, $length',
        ],
    'wb_poke' =>
        [
            'signatureArguments' => '$address, $contents, $length = null',
            'arguments' => '$address, $contents, $length',
        ],
    'wb_load_library' =>
        [
            'signatureArguments' => '$libname',
            'arguments' => '$libname',
        ],
    'wb_release_library' =>
        [
            'signatureArguments' => '$idlib',
            'arguments' => '$idlib',
        ],
    'wb_get_function_address' =>
        [
            'signatureArguments' => '$fname, $idlib',
            'arguments' => '$fname, $idlib',
        ],
    'wb_call_function' =>
        [
            'signatureArguments' => '$address, $args = []',
            'arguments' => '$address, $args',
        ],
    'wb_get_midi_callback' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wb_get_enum_callback' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wb_get_hook_callback' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wb_destroy_window' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'wb_get_size' =>
        [
            'signatureArguments' => '$object, $param = null',
            'arguments' => '$object, $param',
        ],
    'wb_set_size' =>
        [
            'signatureArguments' => '$wbobject, $width, $height = null',
            'arguments' => '$wbobject, $width, $height',
        ],
    'wb_set_position' =>
        [
            'signatureArguments' => '$wbobject, $xpos = null, $ypos = null',
            'arguments' => '$wbobject, $xpos, $ypos',
        ],
    'wb_get_position' =>
        [
            'signatureArguments' => '$wbobject, $clientarea = null',
            'arguments' => '$wbobject, $clientarea',
        ],
    'wb_create_window' =>
        [
            'signatureArguments' => '$parent, $wclass, $caption = null, $xpos = null, $ypos = null, $width = null, $height = null, $style = null, $param = null',
            'arguments' => '$parent, $wclass, $caption, $xpos, $ypos, $width, $height, $style, $param',
        ],
    'wb_get_instance' =>
        [
            'signatureArguments' => '$caption, $bringtofront = null',
            'arguments' => '$caption, $bringtofront',
        ],
    'wb_get_item_list' =>
        [
            'signatureArguments' => '$wbobject',
            'arguments' => '$wbobject',
        ],
    'wb_set_area' =>
        [
            'signatureArguments' => '$window, $type, $x = null, $y = null, $width = null, $height = null',
            'arguments' => '$window, $type, $x, $y, $width, $height',
        ],
    'wb_sys_dlg_path' =>
        [
            'signatureArguments' => '$parent, $title = null, $path = null',
            'arguments' => '$parent, $title, $path',
        ],
    'wb_sys_dlg_color' =>
        [
            'signatureArguments' => '$parent, $title = null, $color = null',
            'arguments' => '$parent, $title, $color',
        ],
    'wbtemp_set_accel_table' =>
        [
            'signatureArguments' => '$parent, $accels',
            'arguments' => '$parent, $accels',
        ],
    'wbtemp_create_control' =>
        [
            'signatureArguments' => '$parent, $class, $caption, $xpos, $ypos, $width, $height, $id, $style, $lparam, $ntab',
            'arguments' => '$parent, $class, $caption, $xpos, $ypos, $width, $height, $id, $style, $lparam, $ntab',
        ],
    'wbtemp_create_item' =>
        [
            'signatureArguments' => '$ctrl, $str',
            'arguments' => '$ctrl, $str',
        ],
    'wbtemp_create_statusbar_items' =>
        [
            'signatureArguments' => '$ctrl, $items, $clear, $param',
            'arguments' => '$ctrl, $items, $clear, $param',
        ],
    'wbtemp_get_text' =>
        [
            'signatureArguments' => '$ctrl, $item = null',
            'arguments' => '$ctrl, $item',
        ],
    'wbtemp_set_text' =>
        [
            'signatureArguments' => '$ctrl, $text, $item',
            'arguments' => '$ctrl, $text, $item',
        ],
    'wbtemp_select_tab' =>
        [
            'signatureArguments' => '$ctrl, $selitems',
            'arguments' => '$ctrl, $selitems',
        ],
    'wbtemp_set_value' =>
        [
            'signatureArguments' => '$ctrl, $value, $item = null',
            'arguments' => '$ctrl, $value, $item',
        ],
    'wbtemp_create_listview_item' =>
        [
            'signatureArguments' => '$ctrl, $item, $image, $value',
            'arguments' => '$ctrl, $item, $image, $value',
        ],
    'wbtemp_set_listview_item_checked' =>
        [
            'signatureArguments' => '$ctrl, $index, $value',
            'arguments' => '$ctrl, $index, $value',
        ],
    'wbtemp_get_listview_item_checked' =>
        [
            'signatureArguments' => '$ctrl, $item',
            'arguments' => '$ctrl, $item',
        ],
    'wbtemp_set_listview_item_text' =>
        [
            'signatureArguments' => '$ctrl, $item, $subitem, $text',
            'arguments' => '$ctrl, $item, $subitem, $text',
        ],
    'wbtemp_get_listview_text' =>
        [
            'signatureArguments' => '$ctrl, $item',
            'arguments' => '$ctrl, $item',
        ],
    'wbtemp_get_listview_columns' =>
        [
            'signatureArguments' => '$ctrl',
            'arguments' => '$ctrl',
        ],
    'wbtemp_create_listview_column' =>
        [
            'signatureArguments' => '$ctrl, $i, $text, $width, $align',
            'arguments' => '$ctrl, $i, $text, $width, $align',
        ],
    'wbtemp_clear_listview_columns' =>
        [
            'signatureArguments' => '$ctrl',
            'arguments' => '$ctrl',
        ],
    'wbtemp_select_listview_item' =>
        [
            'signatureArguments' => '$ctrl, $item, $selected',
            'arguments' => '$ctrl, $item, $selected',
        ],
    'wbtemp_select_all_listview_items' =>
        [
            'signatureArguments' => '$ctrl, $bool',
            'arguments' => '$ctrl, $bool',
        ],
    'wbtemp_create_menu' =>
        [
            'signatureArguments' => '$parent, $caption',
            'arguments' => '$parent, $caption',
        ],
    'wbtemp_get_menu_item_checked' =>
        [
            'signatureArguments' => '$ctrl, $item',
            'arguments' => '$ctrl, $item',
        ],
    'wbtemp_set_menu_item_checked' =>
        [
            'signatureArguments' => '$ctrl, $selitems, $selected',
            'arguments' => '$ctrl, $selitems, $selected',
        ],
    'wbtemp_set_menu_item_selected' =>
        [
            'signatureArguments' => '$ctrl, $item, $selected',
            'arguments' => '$ctrl, $item, $selected',
        ],
    'wbtemp_set_menu_item_image' =>
        [
            'signatureArguments' => '$ctrl, $item, $imageHandle',
            'arguments' => '$ctrl, $item, $imageHandle',
        ],
    'wbtemp_create_toolbar' =>
        [
            'signatureArguments' => '$parent, $caption, $width, $height, $lparam',
            'arguments' => '$parent, $caption, $width, $height, $lparam',
        ],
    'wbtemp_create_treeview_item' =>
        [
            'signatureArguments' => '$ctrl, $name, $value, $where = 0, $image_index = 0, $selected_image = 0, $selected_image_index = 0',
            'arguments' => '$ctrl, $name, $value, $where, $image_index, $selected_image, $selected_image_index',
        ],
    'wbtemp_set_treeview_item_selected' =>
        [
            'signatureArguments' => '$ctrl, $selitems',
            'arguments' => '$ctrl, $selitems',
        ],
    'wbtemp_set_treeview_item_text' =>
        [
            'signatureArguments' => '$ctrl, $item, $text',
            'arguments' => '$ctrl, $item, $text',
        ],
    'wbtemp_set_treeview_item_value' =>
        [
            'signatureArguments' => '$ctrl, $item, $value',
            'arguments' => '$ctrl, $item, $value',
        ],
    'wbtemp_get_treeview_item_text' =>
        [
            'signatureArguments' => '$ctrl, $item',
            'arguments' => '$ctrl, $item',
        ],
    'wbtemp_sys_dlg_open' =>
        [
            'signatureArguments' => '$parent, $title = null, $filter = null, $path = null, $flags = null',
            'arguments' => '$parent, $title, $filter, $path, $flags',
        ],
    'wbtemp_sys_dlg_save' =>
        [
            'signatureArguments' => '$wbObj, $title = \'\', $filter = \'\', $path = \'\', $filename = \'\', $defext = \'\'',
            'arguments' => '$wbObj, $title, $filter, $path, $filename, $defext',
        ],
    'simdjson_decode' =>
        [
            'signatureArguments' => 'string $json, bool $associative = false, int $depth = 512',
            'arguments' => '$json, $associative, $depth',
        ],
    'simdjson_is_valid' =>
        [
            'signatureArguments' => 'string $json, int $depth = 512',
            'arguments' => '$json, $depth',
        ],
    'simdjson_key_count' =>
        [
            'signatureArguments' => 'string $json, string $key, int $depth = 512, bool $throw_if_uncountable = false',
            'arguments' => '$json, $key, $depth, $throw_if_uncountable',
        ],
    'simdjson_key_exists' =>
        [
            'signatureArguments' => 'string $json, string $key, int $depth = 512',
            'arguments' => '$json, $key, $depth',
        ],
    'simdjson_key_value' =>
        [
            'signatureArguments' => 'string $json, string $key, bool $associative = false, int $depth = 512',
            'arguments' => '$json, $key, $associative, $depth',
        ],
    'imap_open' =>
        [
            'signatureArguments' => 'string $mailbox, string $user, string $password, int $flags = 0, int $retries = 0, array $options = []',
            'arguments' => '$mailbox, $user, $password, $flags, $retries, $options',
        ],
    'imap_close' =>
        [
            'signatureArguments' => '$imap, int $flags = 0',
            'arguments' => '$imap, $flags',
        ],
    'imap_num_msg' =>
        [
            'signatureArguments' => '$imap',
            'arguments' => '$imap',
        ],
    'imap_num_recent' =>
        [
            'signatureArguments' => '$imap',
            'arguments' => '$imap',
        ],
    'imap_headers' =>
        [
            'signatureArguments' => '$imap',
            'arguments' => '$imap',
        ],
    'imap_rfc822_parse_headers' =>
        [
            'signatureArguments' => 'string $headers, string $default_hostname = "UNKNOWN"',
            'arguments' => '$headers, $default_hostname',
        ],
    'imap_rfc822_write_address' =>
        [
            'signatureArguments' => 'string $mailbox, string $hostname, string $personal',
            'arguments' => '$mailbox, $hostname, $personal',
        ],
    'imap_rfc822_parse_adrlist' =>
        [
            'signatureArguments' => 'string $string, string $default_hostname',
            'arguments' => '$string, $default_hostname',
        ],
    'imap_bodystruct' =>
        [
            'signatureArguments' => '$imap, int $message_num, string $section',
            'arguments' => '$imap, $message_num, $section',
        ],
    'imap_fetchstructure' =>
        [
            'signatureArguments' => '$imap, int $message_num, int $flags = 0',
            'arguments' => '$imap, $message_num, $flags',
        ],
    'imap_expunge' =>
        [
            'signatureArguments' => '$imap',
            'arguments' => '$imap',
        ],
    'imap_delete' =>
        [
            'signatureArguments' => '$imap, string $message_nums, int $flags = 0',
            'arguments' => '$imap, $message_nums, $flags',
        ],
    'imap_undelete' =>
        [
            'signatureArguments' => '$imap, string $message_nums, int $flags = 0',
            'arguments' => '$imap, $message_nums, $flags',
        ],
    'imap_check' =>
        [
            'signatureArguments' => '$imap',
            'arguments' => '$imap',
        ],
    'imap_listscan' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern, string $content',
            'arguments' => '$imap, $reference, $pattern, $content',
        ],
    'imap_mail_copy' =>
        [
            'signatureArguments' => '$imap, string $message_nums, string $mailbox, int $flags = 0',
            'arguments' => '$imap, $message_nums, $mailbox, $flags',
        ],
    'imap_mail_move' =>
        [
            'signatureArguments' => '$imap, string $message_nums, string $mailbox, int $flags = 0',
            'arguments' => '$imap, $message_nums, $mailbox, $flags',
        ],
    'imap_mail_compose' =>
        [
            'signatureArguments' => 'array $envelope, array $bodies',
            'arguments' => '$envelope, $bodies',
        ],
    'imap_createmailbox' =>
        [
            'signatureArguments' => '$imap, string $mailbox',
            'arguments' => '$imap, $mailbox',
        ],
    'imap_renamemailbox' =>
        [
            'signatureArguments' => '$imap, string $from, string $to',
            'arguments' => '$imap, $from, $to',
        ],
    'imap_deletemailbox' =>
        [
            'signatureArguments' => '$imap, string $mailbox',
            'arguments' => '$imap, $mailbox',
        ],
    'imap_subscribe' =>
        [
            'signatureArguments' => '$imap, string $mailbox',
            'arguments' => '$imap, $mailbox',
        ],
    'imap_unsubscribe' =>
        [
            'signatureArguments' => '$imap, string $mailbox',
            'arguments' => '$imap, $mailbox',
        ],
    'imap_append' =>
        [
            'signatureArguments' => '$imap, string $folder, string $message, ?string $options = null, ?string $internal_date = null',
            'arguments' => '$imap, $folder, $message, $options, $internal_date',
        ],
    'imap_ping' =>
        [
            'signatureArguments' => '$imap',
            'arguments' => '$imap',
        ],
    'imap_base64' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_qprint' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_8bit' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_binary' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_utf8' =>
        [
            'signatureArguments' => 'string $mime_encoded_text',
            'arguments' => '$mime_encoded_text',
        ],
    'imap_status' =>
        [
            'signatureArguments' => '$imap, string $mailbox, int $flags',
            'arguments' => '$imap, $mailbox, $flags',
        ],
    'imap_status_current' =>
        [
            'signatureArguments' => '$stream_id, $options',
            'arguments' => '$stream_id, $options',
        ],
    'imap_mailboxmsginfo' =>
        [
            'signatureArguments' => '$imap',
            'arguments' => '$imap',
        ],
    'imap_setflag_full' =>
        [
            'signatureArguments' => '$imap, string $sequence, string $flag, int $options = NIL',
            'arguments' => '$imap, $sequence, $flag, $options',
        ],
    'imap_clearflag_full' =>
        [
            'signatureArguments' => '$imap, string $sequence, string $flag, int $options = 0',
            'arguments' => '$imap, $sequence, $flag, $options',
        ],
    'imap_uid' =>
        [
            'signatureArguments' => '$imap, int $message_num',
            'arguments' => '$imap, $message_num',
        ],
    'imap_msgno' =>
        [
            'signatureArguments' => '$imap, int $message_uid',
            'arguments' => '$imap, $message_uid',
        ],
    'imap_list' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern',
            'arguments' => '$imap, $reference, $pattern',
        ],
    'imap_lsub' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern',
            'arguments' => '$imap, $reference, $pattern',
        ],
    'imap_fetch_overview' =>
        [
            'signatureArguments' => '$imap, string $sequence, int $flags = 0',
            'arguments' => '$imap, $sequence, $flags',
        ],
    'imap_alerts' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'imap_errors' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'imap_last_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'imap_utf7_decode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_utf7_encode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_mime_header_decode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_thread' =>
        [
            'signatureArguments' => '$imap, int $flags = SE_FREE',
            'arguments' => '$imap, $flags',
        ],
    'imap_timeout' =>
        [
            'signatureArguments' => 'int $timeout_type, int $timeout = -1',
            'arguments' => '$timeout_type, $timeout',
        ],
    'imap_get_quota' =>
        [
            'signatureArguments' => '$imap, string $quota_root',
            'arguments' => '$imap, $quota_root',
        ],
    'imap_get_quotaroot' =>
        [
            'signatureArguments' => '$imap, string $mailbox',
            'arguments' => '$imap, $mailbox',
        ],
    'imap_set_quota' =>
        [
            'signatureArguments' => '$imap, string $quota_root, int $mailbox_size',
            'arguments' => '$imap, $quota_root, $mailbox_size',
        ],
    'imap_setacl' =>
        [
            'signatureArguments' => '$imap, string $mailbox, string $user_id, string $rights',
            'arguments' => '$imap, $mailbox, $user_id, $rights',
        ],
    'imap_getacl' =>
        [
            'signatureArguments' => '$imap, string $mailbox',
            'arguments' => '$imap, $mailbox',
        ],
    'imap_myrights' =>
        [
            'signatureArguments' => '$stream_id, $mailbox',
            'arguments' => '$stream_id, $mailbox',
        ],
    'imap_setannotation' =>
        [
            'signatureArguments' => '$stream_id, $mailbox, $entry, $attr, $value',
            'arguments' => '$stream_id, $mailbox, $entry, $attr, $value',
        ],
    'imap_getannotation' =>
        [
            'signatureArguments' => '$stream_id, $mailbox, $entry, $attr',
            'arguments' => '$stream_id, $mailbox, $entry, $attr',
        ],
    'imap_mail' =>
        [
            'signatureArguments' => 'string $to, string $subject, string $message, ?string $additional_headers = null, ?string $cc = null, ?string $bcc = null, ?string $return_path = null',
            'arguments' => '$to, $subject, $message, $additional_headers, $cc, $bcc, $return_path',
        ],
    'imap_header' =>
        [
            'signatureArguments' => '$stream_id, $msg_no, $from_length = 0, $subject_length = 0, $default_host = null',
            'arguments' => '$stream_id, $msg_no, $from_length, $subject_length, $default_host',
        ],
    'imap_listmailbox' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern',
            'arguments' => '$imap, $reference, $pattern',
        ],
    'imap_getmailboxes' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern',
            'arguments' => '$imap, $reference, $pattern',
        ],
    'imap_scanmailbox' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern, string $content',
            'arguments' => '$imap, $reference, $pattern, $content',
        ],
    'imap_listsubscribed' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern',
            'arguments' => '$imap, $reference, $pattern',
        ],
    'imap_getsubscribed' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern',
            'arguments' => '$imap, $reference, $pattern',
        ],
    'imap_fetchtext' =>
        [
            'signatureArguments' => '$imap, int $message_num, int $flags = 0',
            'arguments' => '$imap, $message_num, $flags',
        ],
    'imap_scan' =>
        [
            'signatureArguments' => '$imap, string $reference, string $pattern, string $content',
            'arguments' => '$imap, $reference, $pattern, $content',
        ],
    'imap_create' =>
        [
            'signatureArguments' => '$imap, string $mailbox',
            'arguments' => '$imap, $mailbox',
        ],
    'imap_rename' =>
        [
            'signatureArguments' => '$imap, string $from, string $to',
            'arguments' => '$imap, $from, $to',
        ],
    'imap_mutf7_to_utf8' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_utf8_to_mutf7' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'imap_is_open' =>
        [
            'signatureArguments' => 'IMAP\\Connection $imap',
            'arguments' => '$imap',
        ],
    'jdtogregorian' =>
        [
            'signatureArguments' => 'int $julian_day',
            'arguments' => '$julian_day',
        ],
    'gregoriantojd' =>
        [
            'signatureArguments' => 'int $month, int $day, int $year',
            'arguments' => '$month, $day, $year',
        ],
    'jdtojulian' =>
        [
            'signatureArguments' => 'int $julian_day',
            'arguments' => '$julian_day',
        ],
    'juliantojd' =>
        [
            'signatureArguments' => 'int $month, int $day, int $year',
            'arguments' => '$month, $day, $year',
        ],
    'jdtojewish' =>
        [
            'signatureArguments' => 'int $julian_day, bool $hebrew = false, int $flags = 0',
            'arguments' => '$julian_day, $hebrew, $flags',
        ],
    'jewishtojd' =>
        [
            'signatureArguments' => 'int $month, int $day, int $year',
            'arguments' => '$month, $day, $year',
        ],
    'jdtofrench' =>
        [
            'signatureArguments' => 'int $julian_day',
            'arguments' => '$julian_day',
        ],
    'frenchtojd' =>
        [
            'signatureArguments' => 'int $month, int $day, int $year',
            'arguments' => '$month, $day, $year',
        ],
    'jddayofweek' =>
        [
            'signatureArguments' => 'int $julian_day, int $mode = CAL_DOW_DAYNO',
            'arguments' => '$julian_day, $mode',
        ],
    'jdmonthname' =>
        [
            'signatureArguments' => 'int $julian_day, int $mode',
            'arguments' => '$julian_day, $mode',
        ],
    'easter_date' =>
        [
            'signatureArguments' => '?int $year, int $mode = CAL_EASTER_DEFAULT',
            'arguments' => '$year, $mode',
        ],
    'easter_days' =>
        [
            'signatureArguments' => '?int $year, int $mode = CAL_EASTER_DEFAULT',
            'arguments' => '$year, $mode',
        ],
    'unixtojd' =>
        [
            'signatureArguments' => '?int $timestamp = null',
            'arguments' => '$timestamp',
        ],
    'jdtounix' =>
        [
            'signatureArguments' => 'int $julian_day',
            'arguments' => '$julian_day',
        ],
    'cal_to_jd' =>
        [
            'signatureArguments' => 'int $calendar, int $month, int $day, int $year',
            'arguments' => '$calendar, $month, $day, $year',
        ],
    'cal_from_jd' =>
        [
            'signatureArguments' => 'int $julian_day, int $calendar',
            'arguments' => '$julian_day, $calendar',
        ],
    'cal_days_in_month' =>
        [
            'signatureArguments' => 'int $calendar, int $month, int $year',
            'arguments' => '$calendar, $month, $year',
        ],
    'cal_info' =>
        [
            'signatureArguments' => 'int $calendar = -1',
            'arguments' => '$calendar',
        ],
    'pspell_new' =>
        [
            'signatureArguments' => 'string $language, string $spelling = "", string $jargon = "", string $encoding = "", int $mode = 0',
            'arguments' => '$language, $spelling, $jargon, $encoding, $mode',
        ],
    'pspell_new_personal' =>
        [
            'signatureArguments' => 'string $filename, string $language, string $spelling = "", string $jargon = "", string $encoding = "", int $mode = 0',
            'arguments' => '$filename, $language, $spelling, $jargon, $encoding, $mode',
        ],
    'pspell_new_config' =>
        [
            'signatureArguments' => '$config',
            'arguments' => '$config',
        ],
    'pspell_check' =>
        [
            'signatureArguments' => '$dictionary, string $word',
            'arguments' => '$dictionary, $word',
        ],
    'pspell_suggest' =>
        [
            'signatureArguments' => '$dictionary, string $word',
            'arguments' => '$dictionary, $word',
        ],
    'pspell_store_replacement' =>
        [
            'signatureArguments' => '$dictionary, string $misspelled, string $correct',
            'arguments' => '$dictionary, $misspelled, $correct',
        ],
    'pspell_add_to_personal' =>
        [
            'signatureArguments' => '$dictionary, string $word',
            'arguments' => '$dictionary, $word',
        ],
    'pspell_add_to_session' =>
        [
            'signatureArguments' => '$dictionary, string $word',
            'arguments' => '$dictionary, $word',
        ],
    'pspell_clear_session' =>
        [
            'signatureArguments' => '$dictionary',
            'arguments' => '$dictionary',
        ],
    'pspell_save_wordlist' =>
        [
            'signatureArguments' => '$dictionary',
            'arguments' => '$dictionary',
        ],
    'pspell_config_create' =>
        [
            'signatureArguments' => 'string $language, string $spelling = "", string $jargon = "", string $encoding = ""',
            'arguments' => '$language, $spelling, $jargon, $encoding',
        ],
    'pspell_config_runtogether' =>
        [
            'signatureArguments' => '$config, bool $allow',
            'arguments' => '$config, $allow',
        ],
    'pspell_config_mode' =>
        [
            'signatureArguments' => '$config, int $mode',
            'arguments' => '$config, $mode',
        ],
    'pspell_config_ignore' =>
        [
            'signatureArguments' => '$config, int $min_length',
            'arguments' => '$config, $min_length',
        ],
    'pspell_config_personal' =>
        [
            'signatureArguments' => '$config, string $filename',
            'arguments' => '$config, $filename',
        ],
    'pspell_config_dict_dir' =>
        [
            'signatureArguments' => '$config, string $directory',
            'arguments' => '$config, $directory',
        ],
    'pspell_config_data_dir' =>
        [
            'signatureArguments' => '$config, string $directory',
            'arguments' => '$config, $directory',
        ],
    'pspell_config_repl' =>
        [
            'signatureArguments' => '$config, string $filename',
            'arguments' => '$config, $filename',
        ],
    'pspell_config_save_repl' =>
        [
            'signatureArguments' => '$config, bool $save',
            'arguments' => '$config, $save',
        ],
    'oauth_get_sbs' =>
        [
            'signatureArguments' => '$http_method, $uri, $request_parameters = []',
            'arguments' => '$http_method, $uri, $request_parameters',
        ],
    'oauth_urlencode' =>
        [
            'signatureArguments' => '$uri',
            'arguments' => '$uri',
        ],
    'zend_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'func_num_args' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'func_get_arg' =>
        [
            'signatureArguments' => 'int $position',
            'arguments' => '$position',
        ],
    'func_get_args' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'strlen' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'strcmp' =>
        [
            'signatureArguments' => 'string $string1, string $string2',
            'arguments' => '$string1, $string2',
        ],
    'strncmp' =>
        [
            'signatureArguments' => 'string $string1, string $string2, int $length',
            'arguments' => '$string1, $string2, $length',
        ],
    'strcasecmp' =>
        [
            'signatureArguments' => 'string $string1, string $string2',
            'arguments' => '$string1, $string2',
        ],
    'strncasecmp' =>
        [
            'signatureArguments' => 'string $string1, string $string2, int $length',
            'arguments' => '$string1, $string2, $length',
        ],
    'str_starts_with' =>
        [
            'signatureArguments' => 'string $haystack, string $needle',
            'arguments' => '$haystack, $needle',
        ],
    'str_ends_with' =>
        [
            'signatureArguments' => 'string $haystack, string $needle',
            'arguments' => '$haystack, $needle',
        ],
    'str_contains' =>
        [
            'signatureArguments' => 'string $haystack, string $needle',
            'arguments' => '$haystack, $needle',
        ],
    'str_decrement' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'str_increment' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'each' =>
        [
            'signatureArguments' => '&$array',
            'arguments' => '$array',
        ],
    'error_reporting' =>
        [
            'signatureArguments' => '?int $error_level',
            'arguments' => '$error_level',
        ],
    'defined' =>
        [
            'signatureArguments' => 'string $constant_name',
            'arguments' => '$constant_name',
        ],
    'get_class' =>
        [
            'signatureArguments' => 'object $object',
            'arguments' => '$object',
        ],
    'get_called_class' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_parent_class' =>
        [
            'signatureArguments' => 'object|string $object_or_class',
            'arguments' => '$object_or_class',
        ],
    'method_exists' =>
        [
            'signatureArguments' => '$object_or_class, string $method',
            'arguments' => '$object_or_class, $method',
        ],
    'property_exists' =>
        [
            'signatureArguments' => '$object_or_class, string $property',
            'arguments' => '$object_or_class, $property',
        ],
    'trait_exists' =>
        [
            'signatureArguments' => 'string $trait, bool $autoload = true',
            'arguments' => '$trait, $autoload',
        ],
    'class_exists' =>
        [
            'signatureArguments' => 'string $class, bool $autoload = true',
            'arguments' => '$class, $autoload',
        ],
    'interface_exists' =>
        [
            'signatureArguments' => 'string $interface, bool $autoload = true',
            'arguments' => '$interface, $autoload',
        ],
    'function_exists' =>
        [
            'signatureArguments' => 'string $function',
            'arguments' => '$function',
        ],
    'enum_exists' =>
        [
            'signatureArguments' => 'string $enum, bool $autoload = true',
            'arguments' => '$enum, $autoload',
        ],
    'class_alias' =>
        [
            'signatureArguments' => 'string $class, string $alias, bool $autoload = true',
            'arguments' => '$class, $alias, $autoload',
        ],
    'get_included_files' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_required_files' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'is_subclass_of' =>
        [
            'signatureArguments' => 'mixed $object_or_class, string $class, bool $allow_string = true',
            'arguments' => '$object_or_class, $class, $allow_string',
        ],
    'is_a' =>
        [
            'signatureArguments' => 'mixed $object_or_class, string $class, bool $allow_string = false',
            'arguments' => '$object_or_class, $class, $allow_string',
        ],
    'get_class_vars' =>
        [
            'signatureArguments' => 'string $class',
            'arguments' => '$class',
        ],
    'get_object_vars' =>
        [
            'signatureArguments' => 'object $object',
            'arguments' => '$object',
        ],
    'get_class_methods' =>
        [
            'signatureArguments' => 'object|string $object_or_class',
            'arguments' => '$object_or_class',
        ],
    'trigger_error' =>
        [
            'signatureArguments' => 'string $message, int $error_level = E_USER_NOTICE',
            'arguments' => '$message, $error_level',
        ],
    'user_error' =>
        [
            'signatureArguments' => 'string $message, int $error_level = E_USER_NOTICE',
            'arguments' => '$message, $error_level',
        ],
    'set_error_handler' =>
        [
            'signatureArguments' => '?callable $callback, int $error_levels = E_ALL|E_STRICT',
            'arguments' => '$callback, $error_levels',
        ],
    'restore_error_handler' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'set_exception_handler' =>
        [
            'signatureArguments' => '?callable $callback',
            'arguments' => '$callback',
        ],
    'restore_exception_handler' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_declared_classes' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_declared_interfaces' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_declared_traits' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_defined_functions' =>
        [
            'signatureArguments' => 'bool $exclude_disabled = true',
            'arguments' => '$exclude_disabled',
        ],
    'get_defined_vars' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'create_function' =>
        [
            'signatureArguments' => 'string $args, string $code',
            'arguments' => '$args, $code',
        ],
    'get_resource_type' =>
        [
            'signatureArguments' => '$resource',
            'arguments' => '$resource',
        ],
    'get_loaded_extensions' =>
        [
            'signatureArguments' => 'bool $zend_extensions = false',
            'arguments' => '$zend_extensions',
        ],
    'extension_loaded' =>
        [
            'signatureArguments' => 'string $extension',
            'arguments' => '$extension',
        ],
    'get_extension_funcs' =>
        [
            'signatureArguments' => 'string $extension',
            'arguments' => '$extension',
        ],
    'get_defined_constants' =>
        [
            'signatureArguments' => 'bool $categorize = false',
            'arguments' => '$categorize',
        ],
    'debug_backtrace' =>
        [
            'signatureArguments' => 'int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0',
            'arguments' => '$options, $limit',
        ],
    'gc_collect_cycles' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gc_enabled' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gc_enable' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gc_disable' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gc_status' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gc_mem_caches' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_resources' =>
        [
            'signatureArguments' => '?string $type',
            'arguments' => '$type',
        ],
    'snmpget' =>
        [
            'signatureArguments' => '$hostname, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$hostname, $community, $object_id, $timeout, $retries',
        ],
    'snmpgetnext' =>
        [
            'signatureArguments' => '$host, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $community, $object_id, $timeout, $retries',
        ],
    'snmpwalk' =>
        [
            'signatureArguments' => '$hostname, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$hostname, $community, $object_id, $timeout, $retries',
        ],
    'snmprealwalk' =>
        [
            'signatureArguments' => '$host, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $community, $object_id, $timeout, $retries',
        ],
    'snmpwalkoid' =>
        [
            'signatureArguments' => '$hostname, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$hostname, $community, $object_id, $timeout, $retries',
        ],
    'snmpset' =>
        [
            'signatureArguments' => '$host, $community, $object_id, $type, $value, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $community, $object_id, $type, $value, $timeout, $retries',
        ],
    'snmp_get_quick_print' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'snmp_set_quick_print' =>
        [
            'signatureArguments' => '$quick_print',
            'arguments' => '$quick_print',
        ],
    'snmp_set_enum_print' =>
        [
            'signatureArguments' => '$enum_print',
            'arguments' => '$enum_print',
        ],
    'snmp_set_oid_output_format' =>
        [
            'signatureArguments' => '$oid_format = SNMP_OID_OUTPUT_MODULE',
            'arguments' => '$oid_format',
        ],
    'snmp_set_oid_numeric_print' =>
        [
            'signatureArguments' => '$oid_format',
            'arguments' => '$oid_format',
        ],
    'snmp2_get' =>
        [
            'signatureArguments' => '$host, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $community, $object_id, $timeout, $retries',
        ],
    'snmp2_getnext' =>
        [
            'signatureArguments' => '$host, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $community, $object_id, $timeout, $retries',
        ],
    'snmp2_walk' =>
        [
            'signatureArguments' => '$host, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $community, $object_id, $timeout, $retries',
        ],
    'snmp2_real_walk' =>
        [
            'signatureArguments' => '$host, $community, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $community, $object_id, $timeout, $retries',
        ],
    'snmp2_set' =>
        [
            'signatureArguments' => '$host, $community, $object_id, $type, $value, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $community, $object_id, $type, $value, $timeout, $retries',
        ],
    'snmp3_get' =>
        [
            'signatureArguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout, $retries',
        ],
    'snmp3_getnext' =>
        [
            'signatureArguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout, $retries',
        ],
    'snmp3_walk' =>
        [
            'signatureArguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout, $retries',
        ],
    'snmp3_real_walk' =>
        [
            'signatureArguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null',
            'arguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout, $retries',
        ],
    'snmp3_set' =>
        [
            'signatureArguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $type, $value, $timeout = 1000000, $retries = 5',
            'arguments' => '$host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $type, $value, $timeout, $retries',
        ],
    'snmp_set_valueretrieval' =>
        [
            'signatureArguments' => '$method',
            'arguments' => '$method',
        ],
    'snmp_get_valueretrieval' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'snmp_read_mib' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'ncurses_addch' =>
        [
            'signatureArguments' => '$ch',
            'arguments' => '$ch',
        ],
    'ncurses_color_set' =>
        [
            'signatureArguments' => '$pair',
            'arguments' => '$pair',
        ],
    'ncurses_delwin' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'ncurses_end' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_getch' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_has_colors' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_init' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_init_pair' =>
        [
            'signatureArguments' => '$pair, $fg, $bg',
            'arguments' => '$pair, $fg, $bg',
        ],
    'ncurses_color_content' =>
        [
            'signatureArguments' => '$color, &$r, &$g, &$b',
            'arguments' => '$color, $r, $g, $b',
        ],
    'ncurses_pair_content' =>
        [
            'signatureArguments' => '$pair, &$f, &$b',
            'arguments' => '$pair, $f, $b',
        ],
    'ncurses_move' =>
        [
            'signatureArguments' => '$y, $x',
            'arguments' => '$y, $x',
        ],
    'ncurses_newwin' =>
        [
            'signatureArguments' => '$rows, $cols, $y, $x',
            'arguments' => '$rows, $cols, $y, $x',
        ],
    'ncurses_refresh' =>
        [
            'signatureArguments' => '$ch',
            'arguments' => '$ch',
        ],
    'ncurses_start_color' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_standout' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_standend' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_baudrate' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_beep' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_can_change_color' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_cbreak' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_clear' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_clrtobot' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_clrtoeol' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_def_prog_mode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_reset_prog_mode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_def_shell_mode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_reset_shell_mode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_delch' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_deleteln' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_doupdate' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_echo' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_erase' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_werase' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'ncurses_erasechar' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_flash' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_flushinp' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_has_ic' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_has_il' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_inch' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_insertln' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_isendwin' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_killchar' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_nl' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_nocbreak' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_noecho' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_nonl' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_noraw' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_raw' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_meta' =>
        [
            'signatureArguments' => '$window, $bit8',
            'arguments' => '$window, $bit8',
        ],
    'ncurses_resetty' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_savetty' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_termattrs' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_use_default_colors' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_slk_attr' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_slk_clear' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_slk_noutrefresh' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_slk_refresh' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_slk_restore' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_slk_touch' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_attroff' =>
        [
            'signatureArguments' => '$attributes',
            'arguments' => '$attributes',
        ],
    'ncurses_attron' =>
        [
            'signatureArguments' => '$attributes',
            'arguments' => '$attributes',
        ],
    'ncurses_attrset' =>
        [
            'signatureArguments' => '$attributes',
            'arguments' => '$attributes',
        ],
    'ncurses_bkgd' =>
        [
            'signatureArguments' => '$attrchar',
            'arguments' => '$attrchar',
        ],
    'ncurses_curs_set' =>
        [
            'signatureArguments' => '$visibility',
            'arguments' => '$visibility',
        ],
    'ncurses_delay_output' =>
        [
            'signatureArguments' => '$milliseconds',
            'arguments' => '$milliseconds',
        ],
    'ncurses_echochar' =>
        [
            'signatureArguments' => '$character',
            'arguments' => '$character',
        ],
    'ncurses_halfdelay' =>
        [
            'signatureArguments' => '$tenth',
            'arguments' => '$tenth',
        ],
    'ncurses_has_key' =>
        [
            'signatureArguments' => '$keycode',
            'arguments' => '$keycode',
        ],
    'ncurses_insch' =>
        [
            'signatureArguments' => '$character',
            'arguments' => '$character',
        ],
    'ncurses_insdelln' =>
        [
            'signatureArguments' => '$count',
            'arguments' => '$count',
        ],
    'ncurses_mouseinterval' =>
        [
            'signatureArguments' => '$milliseconds',
            'arguments' => '$milliseconds',
        ],
    'ncurses_napms' =>
        [
            'signatureArguments' => '$milliseconds',
            'arguments' => '$milliseconds',
        ],
    'ncurses_scrl' =>
        [
            'signatureArguments' => '$count',
            'arguments' => '$count',
        ],
    'ncurses_slk_attroff' =>
        [
            'signatureArguments' => '$intarg',
            'arguments' => '$intarg',
        ],
    'ncurses_slk_attron' =>
        [
            'signatureArguments' => '$intarg',
            'arguments' => '$intarg',
        ],
    'ncurses_slk_attrset' =>
        [
            'signatureArguments' => '$intarg',
            'arguments' => '$intarg',
        ],
    'ncurses_slk_color' =>
        [
            'signatureArguments' => '$intarg',
            'arguments' => '$intarg',
        ],
    'ncurses_slk_init' =>
        [
            'signatureArguments' => '$format',
            'arguments' => '$format',
        ],
    'ncurses_slk_set' =>
        [
            'signatureArguments' => '$labelnr, $label, $format',
            'arguments' => '$labelnr, $label, $format',
        ],
    'ncurses_typeahead' =>
        [
            'signatureArguments' => '$fd',
            'arguments' => '$fd',
        ],
    'ncurses_ungetch' =>
        [
            'signatureArguments' => '$keycode',
            'arguments' => '$keycode',
        ],
    'ncurses_vidattr' =>
        [
            'signatureArguments' => '$intarg',
            'arguments' => '$intarg',
        ],
    'ncurses_wrefresh' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'ncurses_use_extended_names' =>
        [
            'signatureArguments' => '$flag',
            'arguments' => '$flag',
        ],
    'ncurses_bkgdset' =>
        [
            'signatureArguments' => '$attrchar',
            'arguments' => '$attrchar',
        ],
    'ncurses_filter' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_noqiflush' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_qiflush' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_timeout' =>
        [
            'signatureArguments' => '$millisec',
            'arguments' => '$millisec',
        ],
    'ncurses_use_env' =>
        [
            'signatureArguments' => '$flag',
            'arguments' => '$flag',
        ],
    'ncurses_addstr' =>
        [
            'signatureArguments' => '$text',
            'arguments' => '$text',
        ],
    'ncurses_putp' =>
        [
            'signatureArguments' => '$text',
            'arguments' => '$text',
        ],
    'ncurses_scr_dump' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'ncurses_scr_init' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'ncurses_scr_restore' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'ncurses_scr_set' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'ncurses_mvaddch' =>
        [
            'signatureArguments' => '$y, $x, $c',
            'arguments' => '$y, $x, $c',
        ],
    'ncurses_mvaddchnstr' =>
        [
            'signatureArguments' => '$y, $x, $s, $n',
            'arguments' => '$y, $x, $s, $n',
        ],
    'ncurses_addchnstr' =>
        [
            'signatureArguments' => '$s, $n',
            'arguments' => '$s, $n',
        ],
    'ncurses_mvaddchstr' =>
        [
            'signatureArguments' => '$y, $x, $s',
            'arguments' => '$y, $x, $s',
        ],
    'ncurses_addchstr' =>
        [
            'signatureArguments' => '$s',
            'arguments' => '$s',
        ],
    'ncurses_mvaddnstr' =>
        [
            'signatureArguments' => '$y, $x, $s, $n',
            'arguments' => '$y, $x, $s, $n',
        ],
    'ncurses_addnstr' =>
        [
            'signatureArguments' => '$s, $n',
            'arguments' => '$s, $n',
        ],
    'ncurses_mvaddstr' =>
        [
            'signatureArguments' => '$y, $x, $s',
            'arguments' => '$y, $x, $s',
        ],
    'ncurses_mvdelch' =>
        [
            'signatureArguments' => '$y, $x',
            'arguments' => '$y, $x',
        ],
    'ncurses_mvgetch' =>
        [
            'signatureArguments' => '$y, $x',
            'arguments' => '$y, $x',
        ],
    'ncurses_mvinch' =>
        [
            'signatureArguments' => '$y, $x',
            'arguments' => '$y, $x',
        ],
    'ncurses_mvwaddstr' =>
        [
            'signatureArguments' => '$window, $y, $x, $text',
            'arguments' => '$window, $y, $x, $text',
        ],
    'ncurses_insstr' =>
        [
            'signatureArguments' => '$text',
            'arguments' => '$text',
        ],
    'ncurses_instr' =>
        [
            'signatureArguments' => '&$buffer',
            'arguments' => '$buffer',
        ],
    'ncurses_mvhline' =>
        [
            'signatureArguments' => '$y, $x, $attrchar, $n',
            'arguments' => '$y, $x, $attrchar, $n',
        ],
    'ncurses_mvcur' =>
        [
            'signatureArguments' => '$old_y, $old_x, $new_y, $new_x',
            'arguments' => '$old_y, $old_x, $new_y, $new_x',
        ],
    'ncurses_init_color' =>
        [
            'signatureArguments' => '$color, $r, $g, $b',
            'arguments' => '$color, $r, $g, $b',
        ],
    'ncurses_border' =>
        [
            'signatureArguments' => '$left, $right, $top, $bottom, $tl_corner, $tr_corner, $bl_corner, $br_corner',
            'arguments' => '$left, $right, $top, $bottom, $tl_corner, $tr_corner, $bl_corner, $br_corner',
        ],
    'ncurses_assume_default_colors' =>
        [
            'signatureArguments' => '$fg, $bg',
            'arguments' => '$fg, $bg',
        ],
    'ncurses_define_key' =>
        [
            'signatureArguments' => '$definition, $keycode',
            'arguments' => '$definition, $keycode',
        ],
    'ncurses_hline' =>
        [
            'signatureArguments' => '$charattr, $n',
            'arguments' => '$charattr, $n',
        ],
    'ncurses_vline' =>
        [
            'signatureArguments' => '$charattr, $n',
            'arguments' => '$charattr, $n',
        ],
    'ncurses_keyok' =>
        [
            'signatureArguments' => '$keycode, $enable',
            'arguments' => '$keycode, $enable',
        ],
    'ncurses_termname' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_longname' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_mousemask' =>
        [
            'signatureArguments' => '$newmask, &$oldmask',
            'arguments' => '$newmask, $oldmask',
        ],
    'ncurses_getmouse' =>
        [
            'signatureArguments' => 'array &$mevent',
            'arguments' => '$mevent',
        ],
    'ncurses_ungetmouse' =>
        [
            'signatureArguments' => 'array $mevent',
            'arguments' => '$mevent',
        ],
    'ncurses_mouse_trafo' =>
        [
            'signatureArguments' => '&$y, &$x, $toscreen',
            'arguments' => '$y, $x, $toscreen',
        ],
    'ncurses_wmouse_trafo' =>
        [
            'signatureArguments' => '$window, &$y, &$x, $toscreen',
            'arguments' => '$window, $y, $x, $toscreen',
        ],
    'ncurses_waddstr' =>
        [
            'signatureArguments' => '$window, $str, $n = null',
            'arguments' => '$window, $str, $n',
        ],
    'ncurses_wnoutrefresh' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'ncurses_wclear' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'ncurses_wcolor_set' =>
        [
            'signatureArguments' => '$window, $color_pair',
            'arguments' => '$window, $color_pair',
        ],
    'ncurses_wgetch' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'ncurses_keypad' =>
        [
            'signatureArguments' => '$window, $bf',
            'arguments' => '$window, $bf',
        ],
    'ncurses_wmove' =>
        [
            'signatureArguments' => '$window, $y, $x',
            'arguments' => '$window, $y, $x',
        ],
    'ncurses_newpad' =>
        [
            'signatureArguments' => '$rows, $cols',
            'arguments' => '$rows, $cols',
        ],
    'ncurses_prefresh' =>
        [
            'signatureArguments' => '$pad, $pminrow, $pmincol, $sminrow, $smincol, $smaxrow, $smaxcol',
            'arguments' => '$pad, $pminrow, $pmincol, $sminrow, $smincol, $smaxrow, $smaxcol',
        ],
    'ncurses_pnoutrefresh' =>
        [
            'signatureArguments' => '$pad, $pminrow, $pmincol, $sminrow, $smincol, $smaxrow, $smaxcol',
            'arguments' => '$pad, $pminrow, $pmincol, $sminrow, $smincol, $smaxrow, $smaxcol',
        ],
    'ncurses_wstandout' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'ncurses_wstandend' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'ncurses_wattrset' =>
        [
            'signatureArguments' => '$window, $attrs',
            'arguments' => '$window, $attrs',
        ],
    'ncurses_wattron' =>
        [
            'signatureArguments' => '$window, $attrs',
            'arguments' => '$window, $attrs',
        ],
    'ncurses_wattroff' =>
        [
            'signatureArguments' => '$window, $attrs',
            'arguments' => '$window, $attrs',
        ],
    'ncurses_waddch' =>
        [
            'signatureArguments' => '$window, $ch',
            'arguments' => '$window, $ch',
        ],
    'ncurses_wborder' =>
        [
            'signatureArguments' => '$window, $left, $right, $top, $bottom, $tl_corner, $tr_corner, $bl_corner, $br_corner',
            'arguments' => '$window, $left, $right, $top, $bottom, $tl_corner, $tr_corner, $bl_corner, $br_corner',
        ],
    'ncurses_whline' =>
        [
            'signatureArguments' => '$window, $charattr, $n',
            'arguments' => '$window, $charattr, $n',
        ],
    'ncurses_wvline' =>
        [
            'signatureArguments' => '$window, $charattr, $n',
            'arguments' => '$window, $charattr, $n',
        ],
    'ncurses_getyx' =>
        [
            'signatureArguments' => '$window, &$y, &$x',
            'arguments' => '$window, $y, $x',
        ],
    'ncurses_getmaxyx' =>
        [
            'signatureArguments' => '$window, &$y, &$x',
            'arguments' => '$window, $y, $x',
        ],
    'ncurses_update_panels' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ncurses_panel_window' =>
        [
            'signatureArguments' => '$panel',
            'arguments' => '$panel',
        ],
    'ncurses_panel_below' =>
        [
            'signatureArguments' => '$panel',
            'arguments' => '$panel',
        ],
    'ncurses_panel_above' =>
        [
            'signatureArguments' => '$panel',
            'arguments' => '$panel',
        ],
    'ncurses_replace_panel' =>
        [
            'signatureArguments' => '$panel, $window',
            'arguments' => '$panel, $window',
        ],
    'ncurses_move_panel' =>
        [
            'signatureArguments' => '$panel, $startx, $starty',
            'arguments' => '$panel, $startx, $starty',
        ],
    'ncurses_bottom_panel' =>
        [
            'signatureArguments' => '$panel',
            'arguments' => '$panel',
        ],
    'ncurses_top_panel' =>
        [
            'signatureArguments' => '$panel',
            'arguments' => '$panel',
        ],
    'ncurses_show_panel' =>
        [
            'signatureArguments' => '$panel',
            'arguments' => '$panel',
        ],
    'ncurses_hide_panel' =>
        [
            'signatureArguments' => '$panel',
            'arguments' => '$panel',
        ],
    'ncurses_del_panel' =>
        [
            'signatureArguments' => '$panel',
            'arguments' => '$panel',
        ],
    'ncurses_new_panel' =>
        [
            'signatureArguments' => '$window',
            'arguments' => '$window',
        ],
    'libxml_set_streams_context' =>
        [
            'signatureArguments' => '$context',
            'arguments' => '$context',
        ],
    'libxml_get_last_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'libxml_clear_errors' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'libxml_get_errors' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'libxml_disable_entity_loader' =>
        [
            'signatureArguments' => 'bool $disable = true',
            'arguments' => '$disable',
        ],
    'libxml_set_external_entity_loader' =>
        [
            'signatureArguments' => '?callable $resolver_function',
            'arguments' => '$resolver_function',
        ],
    'libxml_get_external_entity_loader' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'shm_attach' =>
        [
            'signatureArguments' => 'int $key, ?int $size, int $permissions = 0666',
            'arguments' => '$key, $size, $permissions',
        ],
    'shm_remove' =>
        [
            'signatureArguments' => '$shm',
            'arguments' => '$shm',
        ],
    'shm_detach' =>
        [
            'signatureArguments' => '$shm',
            'arguments' => '$shm',
        ],
    'shm_put_var' =>
        [
            'signatureArguments' => '$shm, int $key, mixed $value',
            'arguments' => '$shm, $key, $value',
        ],
    'shm_has_var' =>
        [
            'signatureArguments' => '$shm, int $key',
            'arguments' => '$shm, $key',
        ],
    'shm_get_var' =>
        [
            'signatureArguments' => '$shm, int $key',
            'arguments' => '$shm, $key',
        ],
    'shm_remove_var' =>
        [
            'signatureArguments' => '$shm, int $key',
            'arguments' => '$shm, $key',
        ],
    'gearman_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gearman_bugreport' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gearman_verbose_name' =>
        [
            'signatureArguments' => '$verbose',
            'arguments' => '$verbose',
        ],
    'gearman_client_return_code' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_create' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_clone' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_error' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_errno' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_options' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_set_options' =>
        [
            'signatureArguments' => '$client_object, $option',
            'arguments' => '$client_object, $option',
        ],
    'gearman_client_add_options' =>
        [
            'signatureArguments' => '$client_object, $option',
            'arguments' => '$client_object, $option',
        ],
    'gearman_client_remove_options' =>
        [
            'signatureArguments' => '$client_object, $option',
            'arguments' => '$client_object, $option',
        ],
    'gearman_client_timeout' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_set_timeout' =>
        [
            'signatureArguments' => '$client_object, $timeout',
            'arguments' => '$client_object, $timeout',
        ],
    'gearman_client_context' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_set_context' =>
        [
            'signatureArguments' => '$client_object, $context',
            'arguments' => '$client_object, $context',
        ],
    'gearman_client_add_server' =>
        [
            'signatureArguments' => '$client_object, $host, $port',
            'arguments' => '$client_object, $host, $port',
        ],
    'gearman_client_add_servers' =>
        [
            'signatureArguments' => '$client_object, $servers',
            'arguments' => '$client_object, $servers',
        ],
    'gearman_client_wait' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_do' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $unique',
            'arguments' => '$client_object, $function_name, $workload, $unique',
        ],
    'gearman_client_do_high' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $unique',
            'arguments' => '$client_object, $function_name, $workload, $unique',
        ],
    'gearman_client_do_normal' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $unique',
            'arguments' => '$client_object, $function_name, $workload, $unique',
        ],
    'gearman_client_do_low' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $unique',
            'arguments' => '$client_object, $function_name, $workload, $unique',
        ],
    'gearman_client_do_job_handle' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_do_status' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_do_background' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $unique',
            'arguments' => '$client_object, $function_name, $workload, $unique',
        ],
    'gearman_client_do_high_background' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $unique',
            'arguments' => '$client_object, $function_name, $workload, $unique',
        ],
    'gearman_client_do_low_background' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $unique',
            'arguments' => '$client_object, $function_name, $workload, $unique',
        ],
    'gearman_client_job_status' =>
        [
            'signatureArguments' => '$client_object, $job_handle',
            'arguments' => '$client_object, $job_handle',
        ],
    'gearman_client_echo' =>
        [
            'signatureArguments' => '$client_object, $workload',
            'arguments' => '$client_object, $workload',
        ],
    'gearman_client_add_task' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $context, $unique',
            'arguments' => '$client_object, $function_name, $workload, $context, $unique',
        ],
    'gearman_client_add_task_high' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $context, $unique',
            'arguments' => '$client_object, $function_name, $workload, $context, $unique',
        ],
    'gearman_client_add_task_low' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $context, $unique',
            'arguments' => '$client_object, $function_name, $workload, $context, $unique',
        ],
    'gearman_client_add_task_background' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $context, $unique',
            'arguments' => '$client_object, $function_name, $workload, $context, $unique',
        ],
    'gearman_client_add_task_high_background' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $context, $unique',
            'arguments' => '$client_object, $function_name, $workload, $context, $unique',
        ],
    'gearman_client_add_task_low_background' =>
        [
            'signatureArguments' => '$client_object, $function_name, $workload, $context, $unique',
            'arguments' => '$client_object, $function_name, $workload, $context, $unique',
        ],
    'gearman_client_add_task_status' =>
        [
            'signatureArguments' => '$client_object, $job_handle, $context',
            'arguments' => '$client_object, $job_handle, $context',
        ],
    'gearman_client_set_workload_fn' =>
        [
            'signatureArguments' => '$client_object, $callback',
            'arguments' => '$client_object, $callback',
        ],
    'gearman_client_set_created_fn' =>
        [
            'signatureArguments' => '$client_object, $callback',
            'arguments' => '$client_object, $callback',
        ],
    'gearman_client_set_data_fn' =>
        [
            'signatureArguments' => '$client_object, $callback',
            'arguments' => '$client_object, $callback',
        ],
    'gearman_client_set_warning_fn' =>
        [
            'signatureArguments' => '$client_object, $callback',
            'arguments' => '$client_object, $callback',
        ],
    'gearman_client_set_status_fn' =>
        [
            'signatureArguments' => '$client_object, $callback',
            'arguments' => '$client_object, $callback',
        ],
    'gearman_client_set_complete_fn' =>
        [
            'signatureArguments' => '$client_object, $callback',
            'arguments' => '$client_object, $callback',
        ],
    'gearman_client_set_exception_fn' =>
        [
            'signatureArguments' => '$client_object, $callback',
            'arguments' => '$client_object, $callback',
        ],
    'gearman_client_set_fail_fn' =>
        [
            'signatureArguments' => '$client_object, $callback',
            'arguments' => '$client_object, $callback',
        ],
    'gearman_client_clear_fn' =>
        [
            'signatureArguments' => '$client_object',
            'arguments' => '$client_object',
        ],
    'gearman_client_run_tasks' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'gearman_task_return_code' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_function_name' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_unique' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_job_handle' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_is_known' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_is_running' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_numerator' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_denominator' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_send_workload' =>
        [
            'signatureArguments' => '$task_object, $data',
            'arguments' => '$task_object, $data',
        ],
    'gearman_task_data' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_data_size' =>
        [
            'signatureArguments' => '$task_object',
            'arguments' => '$task_object',
        ],
    'gearman_task_recv_data' =>
        [
            'signatureArguments' => '$task_object, $data_len',
            'arguments' => '$task_object, $data_len',
        ],
    'gearman_worker_return_code' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_create' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gearman_worker_clone' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_error' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_errno' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_options' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_set_options' =>
        [
            'signatureArguments' => '$worker_object, $option',
            'arguments' => '$worker_object, $option',
        ],
    'gearman_worker_add_options' =>
        [
            'signatureArguments' => '$worker_object, $option',
            'arguments' => '$worker_object, $option',
        ],
    'gearman_worker_remove_options' =>
        [
            'signatureArguments' => '$worker_object, $option',
            'arguments' => '$worker_object, $option',
        ],
    'gearman_worker_timeout' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_set_timeout' =>
        [
            'signatureArguments' => '$worker_object, $timeout',
            'arguments' => '$worker_object, $timeout',
        ],
    'gearman_worker_add_server' =>
        [
            'signatureArguments' => '$worker_object, $host, $port',
            'arguments' => '$worker_object, $host, $port',
        ],
    'gearman_worker_add_servers' =>
        [
            'signatureArguments' => '$worker_object, $servers',
            'arguments' => '$worker_object, $servers',
        ],
    'gearman_worker_wait' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_register' =>
        [
            'signatureArguments' => '$worker_object, $function_name, $timeout',
            'arguments' => '$worker_object, $function_name, $timeout',
        ],
    'gearman_worker_unregister' =>
        [
            'signatureArguments' => '$worker_object, $function_name',
            'arguments' => '$worker_object, $function_name',
        ],
    'gearman_worker_unregister_all' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_grab_job' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_add_function' =>
        [
            'signatureArguments' => '$worker_object, $function_name, $function, $data, $timeout',
            'arguments' => '$worker_object, $function_name, $function, $data, $timeout',
        ],
    'gearman_worker_work' =>
        [
            'signatureArguments' => '$worker_object',
            'arguments' => '$worker_object',
        ],
    'gearman_worker_echo' =>
        [
            'signatureArguments' => '$worker_object, $workload',
            'arguments' => '$worker_object, $workload',
        ],
    'gearman_job_return_code' =>
        [
            'signatureArguments' => '$job_object',
            'arguments' => '$job_object',
        ],
    'gearman_job_send_data' =>
        [
            'signatureArguments' => '$job_object, $data',
            'arguments' => '$job_object, $data',
        ],
    'gearman_job_send_warning' =>
        [
            'signatureArguments' => '$job_object, $warning',
            'arguments' => '$job_object, $warning',
        ],
    'gearman_job_send_status' =>
        [
            'signatureArguments' => '$job_object, $numerator, $denominator',
            'arguments' => '$job_object, $numerator, $denominator',
        ],
    'gearman_job_send_complete' =>
        [
            'signatureArguments' => '$job_object, $result',
            'arguments' => '$job_object, $result',
        ],
    'gearman_job_send_exception' =>
        [
            'signatureArguments' => '$job_object, $exception',
            'arguments' => '$job_object, $exception',
        ],
    'gearman_job_send_fail' =>
        [
            'signatureArguments' => '$job_object',
            'arguments' => '$job_object',
        ],
    'gearman_job_handle' =>
        [
            'signatureArguments' => '$job_object',
            'arguments' => '$job_object',
        ],
    'gearman_job_function_name' =>
        [
            'signatureArguments' => '$job_object',
            'arguments' => '$job_object',
        ],
    'gearman_job_unique' =>
        [
            'signatureArguments' => '$job_object',
            'arguments' => '$job_object',
        ],
    'gearman_job_workload' =>
        [
            'signatureArguments' => '$job_object',
            'arguments' => '$job_object',
        ],
    'gearman_job_workload_size' =>
        [
            'signatureArguments' => '$job_object',
            'arguments' => '$job_object',
        ],
    'socket_addrinfo_lookup' =>
        [
            'signatureArguments' => 'string $host, ?string $service, array $hints = []',
            'arguments' => '$host, $service, $hints',
        ],
    'socket_addrinfo_connect' =>
        [
            'signatureArguments' => 'AddressInfo $address',
            'arguments' => '$address',
        ],
    'socket_addrinfo_bind' =>
        [
            'signatureArguments' => 'AddressInfo $address',
            'arguments' => '$address',
        ],
    'socket_addrinfo_explain' =>
        [
            'signatureArguments' => 'AddressInfo $address',
            'arguments' => '$address',
        ],
    'socket_select' =>
        [
            'signatureArguments' => '?array &$read, ?array &$write, ?array &$except, ?int $seconds, int $microseconds = 0',
            'arguments' => '$read, $write, $except, $seconds, $microseconds',
        ],
    'socket_create' =>
        [
            'signatureArguments' => 'int $domain, int $type, int $protocol',
            'arguments' => '$domain, $type, $protocol',
        ],
    'socket_export_stream' =>
        [
            'signatureArguments' => 'Socket $socket',
            'arguments' => '$socket',
        ],
    'socket_create_listen' =>
        [
            'signatureArguments' => 'int $port, int $backlog = 128',
            'arguments' => '$port, $backlog',
        ],
    'socket_create_pair' =>
        [
            'signatureArguments' => 'int $domain, int $type, int $protocol, &$pair',
            'arguments' => '$domain, $type, $protocol, $pair',
        ],
    'socket_accept' =>
        [
            'signatureArguments' => 'Socket $socket',
            'arguments' => '$socket',
        ],
    'socket_set_nonblock' =>
        [
            'signatureArguments' => 'Socket $socket',
            'arguments' => '$socket',
        ],
    'socket_set_block' =>
        [
            'signatureArguments' => 'Socket $socket',
            'arguments' => '$socket',
        ],
    'socket_listen' =>
        [
            'signatureArguments' => 'Socket $socket, int $backlog = 0',
            'arguments' => '$socket, $backlog',
        ],
    'socket_close' =>
        [
            'signatureArguments' => 'Socket $socket',
            'arguments' => '$socket',
        ],
    'socket_write' =>
        [
            'signatureArguments' => 'Socket $socket, string $data, ?int $length = null',
            'arguments' => '$socket, $data, $length',
        ],
    'socket_read' =>
        [
            'signatureArguments' => 'Socket $socket, int $length, int $mode = PHP_BINARY_READ',
            'arguments' => '$socket, $length, $mode',
        ],
    'socket_getsockname' =>
        [
            'signatureArguments' => 'Socket $socket, &$address, &$port = null',
            'arguments' => '$socket, $address, $port',
        ],
    'socket_getpeername' =>
        [
            'signatureArguments' => 'Socket $socket, &$address, &$port = null',
            'arguments' => '$socket, $address, $port',
        ],
    'socket_connect' =>
        [
            'signatureArguments' => 'Socket $socket, string $address, ?int $port = null',
            'arguments' => '$socket, $address, $port',
        ],
    'socket_strerror' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'socket_bind' =>
        [
            'signatureArguments' => 'Socket $socket, string $address, int $port = 0',
            'arguments' => '$socket, $address, $port',
        ],
    'socket_recv' =>
        [
            'signatureArguments' => 'Socket $socket, &$data, int $length, int $flags',
            'arguments' => '$socket, $data, $length, $flags',
        ],
    'socket_send' =>
        [
            'signatureArguments' => 'Socket $socket, string $data, int $length, int $flags',
            'arguments' => '$socket, $data, $length, $flags',
        ],
    'socket_recvfrom' =>
        [
            'signatureArguments' => 'Socket $socket, &$data, int $length, int $flags, &$address, &$port = null',
            'arguments' => '$socket, $data, $length, $flags, $address, $port',
        ],
    'socket_sendto' =>
        [
            'signatureArguments' => 'Socket $socket, string $data, int $length, int $flags, string $address, ?int $port = null',
            'arguments' => '$socket, $data, $length, $flags, $address, $port',
        ],
    'socket_get_option' =>
        [
            'signatureArguments' => 'Socket $socket, int $level, int $option',
            'arguments' => '$socket, $level, $option',
        ],
    'socket_set_option' =>
        [
            'signatureArguments' => 'Socket $socket, int $level, int $option, $value',
            'arguments' => '$socket, $level, $option, $value',
        ],
    'socket_shutdown' =>
        [
            'signatureArguments' => 'Socket $socket, int $mode = 2',
            'arguments' => '$socket, $mode',
        ],
    'socket_last_error' =>
        [
            'signatureArguments' => '?Socket $socket = null',
            'arguments' => '$socket',
        ],
    'socket_clear_error' =>
        [
            'signatureArguments' => '?Socket $socket = null',
            'arguments' => '$socket',
        ],
    'socket_import_stream' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'socket_getopt' =>
        [
            'signatureArguments' => 'Socket $socket, int $level, int $option',
            'arguments' => '$socket, $level, $option',
        ],
    'socket_setopt' =>
        [
            'signatureArguments' => 'Socket $socket, int $level, int $option, $value',
            'arguments' => '$socket, $level, $option, $value',
        ],
    'socket_wsaprotocol_info_export' =>
        [
            'signatureArguments' => '$socket, $target_pid',
            'arguments' => '$socket, $target_pid',
        ],
    'socket_wsaprotocol_info_import' =>
        [
            'signatureArguments' => '$info_id',
            'arguments' => '$info_id',
        ],
    'socket_wsaprotocol_info_release' =>
        [
            'signatureArguments' => '$info_id',
            'arguments' => '$info_id',
        ],
    'socket_atmark' =>
        [
            'signatureArguments' => 'Socket $socket',
            'arguments' => '$socket',
        ],
    'wddx_serialize_value' =>
        [
            'signatureArguments' => '$var, $comment = null',
            'arguments' => '$var, $comment',
        ],
    'wddx_serialize_vars' =>
        [
            'signatureArguments' => '$var_name, ...$_',
            'arguments' => '$var_name, $_',
        ],
    'wddx_packet_start' =>
        [
            'signatureArguments' => '$comment = null',
            'arguments' => '$comment',
        ],
    'wddx_packet_end' =>
        [
            'signatureArguments' => '$packet_id',
            'arguments' => '$packet_id',
        ],
    'wddx_add_vars' =>
        [
            'signatureArguments' => '$packet_id, $var_name, ...$_',
            'arguments' => '$packet_id, $var_name, $_',
        ],
    'wddx_deserialize' =>
        [
            'signatureArguments' => '$packet',
            'arguments' => '$packet',
        ],
    'ming_setcubicthreshold' =>
        [
            'signatureArguments' => '$threshold',
            'arguments' => '$threshold',
        ],
    'ming_setscale' =>
        [
            'signatureArguments' => '$scale',
            'arguments' => '$scale',
        ],
    'ming_useswfversion' =>
        [
            'signatureArguments' => '$version',
            'arguments' => '$version',
        ],
    'ming_keypress' =>
        [
            'signatureArguments' => '$char',
            'arguments' => '$char',
        ],
    'ming_useconstants' =>
        [
            'signatureArguments' => '$use',
            'arguments' => '$use',
        ],
    'ming_setswfcompression' =>
        [
            'signatureArguments' => '$level',
            'arguments' => '$level',
        ],
    'iconv' =>
        [
            'signatureArguments' => 'string $from_encoding, string $to_encoding, string $string',
            'arguments' => '$from_encoding, $to_encoding, $string',
        ],
    'ob_iconv_handler' =>
        [
            'signatureArguments' => 'string $contents, int $status',
            'arguments' => '$contents, $status',
        ],
    'iconv_get_encoding' =>
        [
            'signatureArguments' => 'string $type = "all"',
            'arguments' => '$type',
        ],
    'iconv_set_encoding' =>
        [
            'signatureArguments' => 'string $type, string $encoding',
            'arguments' => '$type, $encoding',
        ],
    'iconv_strlen' =>
        [
            'signatureArguments' => 'string $string, ?string $encoding = null',
            'arguments' => '$string, $encoding',
        ],
    'iconv_substr' =>
        [
            'signatureArguments' => 'string $string, int $offset, ?int $length, ?string $encoding = null',
            'arguments' => '$string, $offset, $length, $encoding',
        ],
    'iconv_strpos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0, ?string $encoding = null',
            'arguments' => '$haystack, $needle, $offset, $encoding',
        ],
    'iconv_strrpos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, ?string $encoding = null',
            'arguments' => '$haystack, $needle, $encoding',
        ],
    'iconv_mime_encode' =>
        [
            'signatureArguments' => 'string $field_name, string $field_value, array $options = []',
            'arguments' => '$field_name, $field_value, $options',
        ],
    'iconv_mime_decode' =>
        [
            'signatureArguments' => 'string $string, int $mode = 0, ?string $encoding = null',
            'arguments' => '$string, $mode, $encoding',
        ],
    'iconv_mime_decode_headers' =>
        [
            'signatureArguments' => 'string $headers, int $mode = 0, ?string $encoding = null',
            'arguments' => '$headers, $mode, $encoding',
        ],
    'xhprof_enable' =>
        [
            'signatureArguments' => '$flags = 0, array $options = []',
            'arguments' => '$flags, $options',
        ],
    'xhprof_disable' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xhprof_sample_enable' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xhprof_sample_disable' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mailparse_determine_best_xfer_encoding' =>
        [
            'signatureArguments' => '$fp',
            'arguments' => '$fp',
        ],
    'mailparse_msg_create' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mailparse_msg_extract_part_file' =>
        [
            'signatureArguments' => '$mimemail, $filename, $callbackfunc',
            'arguments' => '$mimemail, $filename, $callbackfunc',
        ],
    'mailparse_msg_extract_part' =>
        [
            'signatureArguments' => '$mimemail, $msgbody, $callbackfunc',
            'arguments' => '$mimemail, $msgbody, $callbackfunc',
        ],
    'mailparse_msg_extract_whole_part_file' =>
        [
            'signatureArguments' => '$mimemail, $filename, $callbackfunc',
            'arguments' => '$mimemail, $filename, $callbackfunc',
        ],
    'mailparse_msg_free' =>
        [
            'signatureArguments' => '$mimemail',
            'arguments' => '$mimemail',
        ],
    'mailparse_msg_get_part_data' =>
        [
            'signatureArguments' => '$mimemail',
            'arguments' => '$mimemail',
        ],
    'mailparse_msg_get_part' =>
        [
            'signatureArguments' => '$mimemail, $mimesection',
            'arguments' => '$mimemail, $mimesection',
        ],
    'mailparse_msg_get_structure' =>
        [
            'signatureArguments' => '$mimemail',
            'arguments' => '$mimemail',
        ],
    'mailparse_msg_parse_file' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'mailparse_msg_parse' =>
        [
            'signatureArguments' => '$mimemail, $data',
            'arguments' => '$mimemail, $data',
        ],
    'mailparse_rfc822_parse_addresses' =>
        [
            'signatureArguments' => '$addresses',
            'arguments' => '$addresses',
        ],
    'mailparse_stream_encode' =>
        [
            'signatureArguments' => '$sourcefp, $destfp, $encoding',
            'arguments' => '$sourcefp, $destfp, $encoding',
        ],
    'mailparse_uudecode_all' =>
        [
            'signatureArguments' => '$fp',
            'arguments' => '$fp',
        ],
    'msg_get_queue' =>
        [
            'signatureArguments' => 'int $key, int $permissions = 0666',
            'arguments' => '$key, $permissions',
        ],
    'msg_send' =>
        [
            'signatureArguments' => '$queue, int $message_type, $message, bool $serialize = true, bool $blocking = true, &$error_code',
            'arguments' => '$queue, $message_type, $message, $serialize, $blocking, $error_code',
        ],
    'msg_receive' =>
        [
            'signatureArguments' => '$queue, int $desired_message_type, &$received_message_type, int $max_message_size, mixed &$message, bool $unserialize = true, int $flags = 0, &$error_code',
            'arguments' => '$queue, $desired_message_type, $received_message_type, $max_message_size, $message, $unserialize, $flags, $error_code',
        ],
    'msg_remove_queue' =>
        [
            'signatureArguments' => '$queue',
            'arguments' => '$queue',
        ],
    'msg_stat_queue' =>
        [
            'signatureArguments' => '$queue',
            'arguments' => '$queue',
        ],
    'msg_set_queue' =>
        [
            'signatureArguments' => '$queue, array $data',
            'arguments' => '$queue, $data',
        ],
    'msg_queue_exists' =>
        [
            'signatureArguments' => 'int $key',
            'arguments' => '$key',
        ],
    'collator_create' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'collator_compare' =>
        [
            'signatureArguments' => 'Collator $object, string $string1, string $string2',
            'arguments' => '$object, $string1, $string2',
        ],
    'collator_get_attribute' =>
        [
            'signatureArguments' => 'Collator $object, int $attribute',
            'arguments' => '$object, $attribute',
        ],
    'collator_set_attribute' =>
        [
            'signatureArguments' => 'Collator $object, int $attribute, int $value',
            'arguments' => '$object, $attribute, $value',
        ],
    'collator_get_strength' =>
        [
            'signatureArguments' => 'Collator $object',
            'arguments' => '$object',
        ],
    'collator_set_strength' =>
        [
            'signatureArguments' => 'Collator $object, int $strength',
            'arguments' => '$object, $strength',
        ],
    'collator_sort' =>
        [
            'signatureArguments' => 'Collator $object, array &$array, int $flags = 0',
            'arguments' => '$object, $array, $flags',
        ],
    'collator_asort' =>
        [
            'signatureArguments' => 'Collator $object, array &$array, int $flags = 0',
            'arguments' => '$object, $array, $flags',
        ],
    'collator_get_locale' =>
        [
            'signatureArguments' => 'Collator $object, int $type',
            'arguments' => '$object, $type',
        ],
    'collator_get_error_code' =>
        [
            'signatureArguments' => 'Collator $object',
            'arguments' => '$object',
        ],
    'collator_get_error_message' =>
        [
            'signatureArguments' => 'Collator $object',
            'arguments' => '$object',
        ],
    'numfmt_create' =>
        [
            'signatureArguments' => 'string $locale, int $style, $pattern = null',
            'arguments' => '$locale, $style, $pattern',
        ],
    'numfmt_format' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, int|float $num, int $type = 0',
            'arguments' => '$formatter, $num, $type',
        ],
    'numfmt_parse' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, string $string, int $type = NumberFormatter::TYPE_DOUBLE, &$offset = null',
            'arguments' => '$formatter, $string, $type, $offset',
        ],
    'numfmt_format_currency' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, float $amount, string $currency',
            'arguments' => '$formatter, $amount, $currency',
        ],
    'numfmt_parse_currency' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, string $string, &$currency, &$offset = null',
            'arguments' => '$formatter, $string, $currency, $offset',
        ],
    'numfmt_set_attribute' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, int $attribute, int|float $value',
            'arguments' => '$formatter, $attribute, $value',
        ],
    'numfmt_get_attribute' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, int $attribute',
            'arguments' => '$formatter, $attribute',
        ],
    'numfmt_set_text_attribute' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, int $attribute, string $value',
            'arguments' => '$formatter, $attribute, $value',
        ],
    'numfmt_get_text_attribute' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, int $attribute',
            'arguments' => '$formatter, $attribute',
        ],
    'numfmt_set_symbol' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, int $symbol, string $value',
            'arguments' => '$formatter, $symbol, $value',
        ],
    'numfmt_get_symbol' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, int $symbol',
            'arguments' => '$formatter, $symbol',
        ],
    'numfmt_set_pattern' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, string $pattern',
            'arguments' => '$formatter, $pattern',
        ],
    'numfmt_get_pattern' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'numfmt_get_locale' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter, int $type = 0',
            'arguments' => '$formatter, $type',
        ],
    'numfmt_get_error_code' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'numfmt_get_error_message' =>
        [
            'signatureArguments' => 'NumberFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'normalizer_normalize' =>
        [
            'signatureArguments' => 'string $string, int $form = Normalizer::FORM_C',
            'arguments' => '$string, $form',
        ],
    'normalizer_is_normalized' =>
        [
            'signatureArguments' => 'string $string, int $form = Normalizer::FORM_C',
            'arguments' => '$string, $form',
        ],
    'locale_get_default' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'locale_set_default' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'locale_get_primary_language' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'locale_get_script' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'locale_get_region' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'locale_get_keywords' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'locale_compose' =>
        [
            'signatureArguments' => 'array $subtags',
            'arguments' => '$subtags',
        ],
    'locale_parse' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'locale_get_all_variants' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'locale_canonicalize' =>
        [
            'signatureArguments' => 'string $locale',
            'arguments' => '$locale',
        ],
    'locale_accept_from_http' =>
        [
            'signatureArguments' => 'string $header',
            'arguments' => '$header',
        ],
    'msgfmt_create' =>
        [
            'signatureArguments' => 'string $locale, string $pattern',
            'arguments' => '$locale, $pattern',
        ],
    'msgfmt_format' =>
        [
            'signatureArguments' => 'MessageFormatter $formatter, array $values',
            'arguments' => '$formatter, $values',
        ],
    'msgfmt_format_message' =>
        [
            'signatureArguments' => 'string $locale, string $pattern, array $values',
            'arguments' => '$locale, $pattern, $values',
        ],
    'msgfmt_parse' =>
        [
            'signatureArguments' => 'MessageFormatter $formatter, string $string',
            'arguments' => '$formatter, $string',
        ],
    'msgfmt_parse_message' =>
        [
            'signatureArguments' => 'string $locale, string $pattern, string $message',
            'arguments' => '$locale, $pattern, $message',
        ],
    'msgfmt_set_pattern' =>
        [
            'signatureArguments' => 'MessageFormatter $formatter, string $pattern',
            'arguments' => '$formatter, $pattern',
        ],
    'msgfmt_get_pattern' =>
        [
            'signatureArguments' => 'MessageFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'msgfmt_get_locale' =>
        [
            'signatureArguments' => 'MessageFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'msgfmt_get_error_code' =>
        [
            'signatureArguments' => 'MessageFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'msgfmt_get_error_message' =>
        [
            'signatureArguments' => 'MessageFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_get_datetype' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_get_timetype' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_get_calendar' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_set_calendar' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter, IntlCalendar|int|null $calendar',
            'arguments' => '$formatter, $calendar',
        ],
    'datefmt_get_timezone_id' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_get_calendar_object' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_get_timezone' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_set_timezone_id' =>
        [
            'signatureArguments' => 'MessageFormatter $mf, $zone',
            'arguments' => '$mf, $zone',
        ],
    'datefmt_set_timezone' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter, $timezone',
            'arguments' => '$formatter, $timezone',
        ],
    'datefmt_get_pattern' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_set_pattern' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter, string $pattern',
            'arguments' => '$formatter, $pattern',
        ],
    'datefmt_is_lenient' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_format_object' =>
        [
            'signatureArguments' => '$datetime, $format = null, ?string $locale = null',
            'arguments' => '$datetime, $format, $locale',
        ],
    'datefmt_parse' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter, string $string, &$offset = null',
            'arguments' => '$formatter, $string, $offset',
        ],
    'datefmt_localtime' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter, string $string, &$offset = null',
            'arguments' => '$formatter, $string, $offset',
        ],
    'datefmt_get_error_code' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'datefmt_get_error_message' =>
        [
            'signatureArguments' => 'IntlDateFormatter $formatter',
            'arguments' => '$formatter',
        ],
    'grapheme_strlen' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'grapheme_strpos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0',
            'arguments' => '$haystack, $needle, $offset',
        ],
    'grapheme_stripos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0',
            'arguments' => '$haystack, $needle, $offset',
        ],
    'grapheme_strrpos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0',
            'arguments' => '$haystack, $needle, $offset',
        ],
    'grapheme_strripos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0',
            'arguments' => '$haystack, $needle, $offset',
        ],
    'grapheme_substr' =>
        [
            'signatureArguments' => 'string $string, int $offset, ?int $length = null',
            'arguments' => '$string, $offset, $length',
        ],
    'grapheme_strstr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $beforeNeedle = false',
            'arguments' => '$haystack, $needle, $beforeNeedle',
        ],
    'grapheme_stristr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $beforeNeedle = false',
            'arguments' => '$haystack, $needle, $beforeNeedle',
        ],
    'grapheme_extract' =>
        [
            'signatureArguments' => 'string $haystack, int $size, int $type = 0, int $offset = 0, &$next = null',
            'arguments' => '$haystack, $size, $type, $offset, $next',
        ],
    'idn_to_ascii' =>
        [
            'signatureArguments' => 'string $domain, int $flags = 0, int $variant = INTL_IDNA_VARIANT_UTS46, &$idna_info',
            'arguments' => '$domain, $flags, $variant, $idna_info',
        ],
    'idn_to_utf8' =>
        [
            'signatureArguments' => 'string $domain, int $flags = 0, int $variant = INTL_IDNA_VARIANT_UTS46, &$idna_info',
            'arguments' => '$domain, $flags, $variant, $idna_info',
        ],
    'intlcal_create_instance' =>
        [
            'signatureArguments' => '$timezone = null, ?string $locale = null',
            'arguments' => '$timezone, $locale',
        ],
    'intlcal_get_keyword_values_for_locale' =>
        [
            'signatureArguments' => 'string $keyword, string $locale, bool $onlyCommon',
            'arguments' => '$keyword, $locale, $onlyCommon',
        ],
    'intlcal_get_now' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intlcal_get_available_locales' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intl_get' =>
        [
            'signatureArguments' => '$calendar, $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_time' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_set_time' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, float $timestamp',
            'arguments' => '$calendar, $timestamp',
        ],
    'intlcal_add' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field, int $value',
            'arguments' => '$calendar, $field, $value',
        ],
    'intlcal_set_time_zone' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, $timezone',
            'arguments' => '$calendar, $timezone',
        ],
    'intlcal_after' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, IntlCalendar $other',
            'arguments' => '$calendar, $other',
        ],
    'intlcal_before' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, IntlCalendar $other',
            'arguments' => '$calendar, $other',
        ],
    'intlcal_set' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $year, int $month, int $dayOfMonth, int $hour, int $minute, int $second',
            'arguments' => '$calendar, $year, $month, $dayOfMonth, $hour, $minute, $second',
        ],
    'intlcal_clear' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, ?int $field = null',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_field_difference' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, float $timestamp, int $field',
            'arguments' => '$calendar, $timestamp, $field',
        ],
    'intlcal_get_actual_maximum' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_actual_minimum' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_day_of_week_type' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $dayOfWeek',
            'arguments' => '$calendar, $dayOfWeek',
        ],
    'intlcal_get_first_day_of_week' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_greates_minimum' =>
        [
            'signatureArguments' => '$calendar, $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_least_maximum' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_greatest_minimum' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_locale' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $type',
            'arguments' => '$calendar, $type',
        ],
    'intcal_get_maximum' =>
        [
            'signatureArguments' => '$calendar, $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_minimal_days_in_first_week' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_get_minimum' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_time_zone' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_get_type' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_get_weekend_transition' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $dayOfWeek',
            'arguments' => '$calendar, $dayOfWeek',
        ],
    'intlcal_in_daylight_time' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_is_lenient' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_is_set' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_get_maximum' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $field',
            'arguments' => '$calendar, $field',
        ],
    'intlcal_is_equivalent_to' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, IntlCalendar $other',
            'arguments' => '$calendar, $other',
        ],
    'intlcal_is_weekend' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, ?float $timestamp = null',
            'arguments' => '$calendar, $timestamp',
        ],
    'intlcal_set_first_day_of_week' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $dayOfWeek',
            'arguments' => '$calendar, $dayOfWeek',
        ],
    'intlcal_set_lenient' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, bool $lenient',
            'arguments' => '$calendar, $lenient',
        ],
    'intlcal_get_repeated_wall_time_option' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_equals' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, IntlCalendar $other',
            'arguments' => '$calendar, $other',
        ],
    'intlcal_get_skipped_wall_time_option' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_set_repeated_wall_time_option' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $option',
            'arguments' => '$calendar, $option',
        ],
    'intlcal_set_skipped_wall_time_option' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $option',
            'arguments' => '$calendar, $option',
        ],
    'intlcal_to_date_time' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_get_error_code' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlcal_get_error_message' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intltz_count_equivalent_ids' =>
        [
            'signatureArguments' => 'string $timezoneId',
            'arguments' => '$timezoneId',
        ],
    'intlz_create_default' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intltz_create_enumeration' =>
        [
            'signatureArguments' => '$countryOrRawOffset',
            'arguments' => '$countryOrRawOffset',
        ],
    'intltz_create_time_zone' =>
        [
            'signatureArguments' => 'string $timezoneId',
            'arguments' => '$timezoneId',
        ],
    'intltz_from_date_time_zone' =>
        [
            'signatureArguments' => 'DateTimeZone $timezone',
            'arguments' => '$timezone',
        ],
    'intltz_get_canonical_id' =>
        [
            'signatureArguments' => 'string $timezoneId, &$isSystemId',
            'arguments' => '$timezoneId, $isSystemId',
        ],
    'intltz_get_display_name' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone, bool $dst = false, int $style = 2, ?string $locale',
            'arguments' => '$timezone, $dst, $style, $locale',
        ],
    'intltz_get_dst_savings' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone',
            'arguments' => '$timezone',
        ],
    'intltz_get_equivalent_id' =>
        [
            'signatureArguments' => 'string $timezoneId, int $offset',
            'arguments' => '$timezoneId, $offset',
        ],
    'intltz_get_error_code' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone',
            'arguments' => '$timezone',
        ],
    'intltz_get_error_message' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone',
            'arguments' => '$timezone',
        ],
    'intltz_getGMT' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intltz_get_id' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone',
            'arguments' => '$timezone',
        ],
    'intltz_get_offset' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone, float $timestamp, bool $local, &$rawOffset, &$dstOffset',
            'arguments' => '$timezone, $timestamp, $local, $rawOffset, $dstOffset',
        ],
    'intltz_get_raw_offset' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone',
            'arguments' => '$timezone',
        ],
    'intltz_get_tz_data_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intltz_to_date_time_zone' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone',
            'arguments' => '$timezone',
        ],
    'intltz_use_daylight_time' =>
        [
            'signatureArguments' => 'IntlTimeZone $timezone',
            'arguments' => '$timezone',
        ],
    'intlgregcal_create_instance' =>
        [
            'signatureArguments' => '$timezoneOrYear, $localeOrMonth, $day, $hour, $minute, $second',
            'arguments' => '$timezoneOrYear, $localeOrMonth, $day, $hour, $minute, $second',
        ],
    'intlgregcal_set_gregorian_change' =>
        [
            'signatureArguments' => 'IntlGregorianCalendar $calendar, float $timestamp',
            'arguments' => '$calendar, $timestamp',
        ],
    'intlgregcal_get_gregorian_change' =>
        [
            'signatureArguments' => 'IntlGregorianCalendar $calendar',
            'arguments' => '$calendar',
        ],
    'intlgregcal_is_leap_year' =>
        [
            'signatureArguments' => 'IntlGregorianCalendar $calendar, int $year',
            'arguments' => '$calendar, $year',
        ],
    'resourcebundle_create' =>
        [
            'signatureArguments' => '?string $locale, ?string $bundle, bool $fallback = true',
            'arguments' => '$locale, $bundle, $fallback',
        ],
    'resourcebundle_get' =>
        [
            'signatureArguments' => 'ResourceBundle $bundle, $index, bool $fallback = true',
            'arguments' => '$bundle, $index, $fallback',
        ],
    'resourcebundle_count' =>
        [
            'signatureArguments' => 'ResourceBundle $bundle',
            'arguments' => '$bundle',
        ],
    'resourcebundle_locales' =>
        [
            'signatureArguments' => 'string $bundle',
            'arguments' => '$bundle',
        ],
    'resourcebundle_get_error_code' =>
        [
            'signatureArguments' => 'ResourceBundle $bundle',
            'arguments' => '$bundle',
        ],
    'resourcebundle_get_error_message' =>
        [
            'signatureArguments' => 'ResourceBundle $bundle',
            'arguments' => '$bundle',
        ],
    'transliterator_create' =>
        [
            'signatureArguments' => 'string $id, int $direction = 0',
            'arguments' => '$id, $direction',
        ],
    'transliterator_create_from_rules' =>
        [
            'signatureArguments' => 'string $rules, int $direction = 0',
            'arguments' => '$rules, $direction',
        ],
    'transliterator_list_ids' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'transliterator_create_inverse' =>
        [
            'signatureArguments' => 'Transliterator $transliterator',
            'arguments' => '$transliterator',
        ],
    'transliterator_transliterate' =>
        [
            'signatureArguments' => 'Transliterator|string $transliterator, string $string, int $start = 0, int $end = -1',
            'arguments' => '$transliterator, $string, $start, $end',
        ],
    'transliterator_get_error_code' =>
        [
            'signatureArguments' => 'Transliterator $transliterator',
            'arguments' => '$transliterator',
        ],
    'transliterator_get_error_message' =>
        [
            'signatureArguments' => 'Transliterator $transliterator',
            'arguments' => '$transliterator',
        ],
    'intl_get_error_code' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intl_get_error_message' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intl_is_failure' =>
        [
            'signatureArguments' => 'int $errorCode',
            'arguments' => '$errorCode',
        ],
    'intl_error_name' =>
        [
            'signatureArguments' => 'int $errorCode',
            'arguments' => '$errorCode',
        ],
    'normalizer_get_raw_decomposition' =>
        [
            'signatureArguments' => 'string $string, int $form = Normalizer::FORM_C',
            'arguments' => '$string, $form',
        ],
    'intltz_create_default' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intltz_get_gmt' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intltz_get_unknown' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'intltz_create_time_zone_id_enumeration' =>
        [
            'signatureArguments' => 'int $type, ?string $region = null, ?int $rawOffset = null',
            'arguments' => '$type, $region, $rawOffset',
        ],
    'intltz_get_region' =>
        [
            'signatureArguments' => 'string $timezoneId',
            'arguments' => '$timezoneId',
        ],
    'intlcal_set_minimal_days_in_first_week' =>
        [
            'signatureArguments' => 'IntlCalendar $calendar, int $days',
            'arguments' => '$calendar, $days',
        ],
    'intltz_get_windows_id' =>
        [
            'signatureArguments' => 'string $timezoneId',
            'arguments' => '$timezoneId',
        ],
    'intltz_get_id_for_windows_id' =>
        [
            'signatureArguments' => 'string $timezoneId, ?string $region = null',
            'arguments' => '$timezoneId, $region',
        ],
    'hash' =>
        [
            'signatureArguments' => 'string $algo, string $data, bool $binary = false, array $options = []',
            'arguments' => '$algo, $data, $binary, $options',
        ],
    'hash_equals' =>
        [
            'signatureArguments' => 'string $known_string, string $user_string',
            'arguments' => '$known_string, $user_string',
        ],
    'hash_file' =>
        [
            'signatureArguments' => 'string $algo, string $filename, bool $binary = false, array $options = []',
            'arguments' => '$algo, $filename, $binary, $options',
        ],
    'hash_hmac' =>
        [
            'signatureArguments' => 'string $algo, string $data, string $key, bool $binary = false',
            'arguments' => '$algo, $data, $key, $binary',
        ],
    'hash_hmac_file' =>
        [
            'signatureArguments' => 'string $algo, string $filename, string $key, bool $binary = false',
            'arguments' => '$algo, $filename, $key, $binary',
        ],
    'hash_init' =>
        [
            'signatureArguments' => 'string $algo, int $flags = 0, string $key = "", array $options = []',
            'arguments' => '$algo, $flags, $key, $options',
        ],
    'hash_update' =>
        [
            'signatureArguments' => '$context, string $data',
            'arguments' => '$context, $data',
        ],
    'hash_update_stream' =>
        [
            'signatureArguments' => '$context, $stream, int $length = -1',
            'arguments' => '$context, $stream, $length',
        ],
    'hash_update_file' =>
        [
            'signatureArguments' => '$context, string $filename, $stream_context',
            'arguments' => '$context, $filename, $stream_context',
        ],
    'hash_final' =>
        [
            'signatureArguments' => '$context, bool $binary = false',
            'arguments' => '$context, $binary',
        ],
    'hash_copy' =>
        [
            'signatureArguments' => '$context',
            'arguments' => '$context',
        ],
    'hash_algos' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'hash_hkdf' =>
        [
            'signatureArguments' => 'string $algo, string $key, int $length = 0, string $info = \'\', string $salt = \'\'',
            'arguments' => '$algo, $key, $length, $info, $salt',
        ],
    'hash_hmac_algos' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mhash_keygen_s2k' =>
        [
            'signatureArguments' => 'int $algo, string $password, string $salt, int $length',
            'arguments' => '$algo, $password, $salt, $length',
        ],
    'mhash_get_block_size' =>
        [
            'signatureArguments' => 'int $algo',
            'arguments' => '$algo',
        ],
    'mhash_get_hash_name' =>
        [
            'signatureArguments' => 'int $algo',
            'arguments' => '$algo',
        ],
    'mhash_count' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mhash' =>
        [
            'signatureArguments' => 'int $algo, string $data, ?string $key',
            'arguments' => '$algo, $data, $key',
        ],
    'rrd_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'rrd_create' =>
        [
            'signatureArguments' => '$filename, $options',
            'arguments' => '$filename, $options',
        ],
    'rrd_fetch' =>
        [
            'signatureArguments' => '$file, $options',
            'arguments' => '$file, $options',
        ],
    'rrd_first' =>
        [
            'signatureArguments' => '$file, $raaindex = 0',
            'arguments' => '$file, $raaindex',
        ],
    'rrd_graph' =>
        [
            'signatureArguments' => '$file, $options',
            'arguments' => '$file, $options',
        ],
    'rrd_info' =>
        [
            'signatureArguments' => '$file',
            'arguments' => '$file',
        ],
    'rrd_last' =>
        [
            'signatureArguments' => '$file',
            'arguments' => '$file',
        ],
    'rrd_lastupdate' =>
        [
            'signatureArguments' => '$file',
            'arguments' => '$file',
        ],
    'rrd_restore' =>
        [
            'signatureArguments' => '$xml_file, $rrd_file, $options = []',
            'arguments' => '$xml_file, $rrd_file, $options',
        ],
    'rrd_tune' =>
        [
            'signatureArguments' => '$file, $options',
            'arguments' => '$file, $options',
        ],
    'rrd_update' =>
        [
            'signatureArguments' => '$file, $options',
            'arguments' => '$file, $options',
        ],
    'rrd_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'rrd_xport' =>
        [
            'signatureArguments' => '$options',
            'arguments' => '$options',
        ],
    'rrd_disconnect' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'rrdc_disconnect' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apc_cache_info' =>
        [
            'signatureArguments' => '$type = \'\', $limited = false',
            'arguments' => '$type, $limited',
        ],
    'apc_clear_cache' =>
        [
            'signatureArguments' => '$cache_type = \'\'',
            'arguments' => '$cache_type',
        ],
    'apc_sma_info' =>
        [
            'signatureArguments' => '$limited = false',
            'arguments' => '$limited',
        ],
    'apc_store' =>
        [
            'signatureArguments' => '$key, $var, $ttl = 0',
            'arguments' => '$key, $var, $ttl',
        ],
    'apc_fetch' =>
        [
            'signatureArguments' => '$key, &$success = null',
            'arguments' => '$key, $success',
        ],
    'apc_delete' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'apc_define_constants' =>
        [
            'signatureArguments' => '$key, array $constants, $case_sensitive = true',
            'arguments' => '$key, $constants, $case_sensitive',
        ],
    'apc_add' =>
        [
            'signatureArguments' => '$key, $var, $ttl = 0',
            'arguments' => '$key, $var, $ttl',
        ],
    'apc_compile_file' =>
        [
            'signatureArguments' => '$filename, $atomic = true',
            'arguments' => '$filename, $atomic',
        ],
    'apc_load_constants' =>
        [
            'signatureArguments' => '$key, $case_sensitive = true',
            'arguments' => '$key, $case_sensitive',
        ],
    'apc_exists' =>
        [
            'signatureArguments' => '$keys',
            'arguments' => '$keys',
        ],
    'apc_delete_file' =>
        [
            'signatureArguments' => '$keys',
            'arguments' => '$keys',
        ],
    'apc_inc' =>
        [
            'signatureArguments' => '$key, $step = 1, &$success = null',
            'arguments' => '$key, $step, $success',
        ],
    'apc_dec' =>
        [
            'signatureArguments' => '$key, $step = 1, &$success = null',
            'arguments' => '$key, $step, $success',
        ],
    'apc_cas' =>
        [
            'signatureArguments' => '$key, $old, $new',
            'arguments' => '$key, $old, $new',
        ],
    'apc_bin_dump' =>
        [
            'signatureArguments' => '$files = null, $user_vars = null',
            'arguments' => '$files, $user_vars',
        ],
    'apc_bin_dumpfile' =>
        [
            'signatureArguments' => '$files, $user_vars, $filename, $flags = 0, $context = null',
            'arguments' => '$files, $user_vars, $filename, $flags, $context',
        ],
    'apc_bin_load' =>
        [
            'signatureArguments' => '$data, $flags = 0',
            'arguments' => '$data, $flags',
        ],
    'apc_bin_loadfile' =>
        [
            'signatureArguments' => '$filename, $context = null, $flags = 0',
            'arguments' => '$filename, $context, $flags',
        ],
    'apcu_clear_cache' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apcu_sma_info' =>
        [
            'signatureArguments' => '$limited = false',
            'arguments' => '$limited',
        ],
    'apcu_store' =>
        [
            'signatureArguments' => '$key, $var, $ttl = 0',
            'arguments' => '$key, $var, $ttl',
        ],
    'apcu_fetch' =>
        [
            'signatureArguments' => '$key, &$success = null',
            'arguments' => '$key, $success',
        ],
    'apcu_delete' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'apcu_add' =>
        [
            'signatureArguments' => '$key, $var, $ttl = 0',
            'arguments' => '$key, $var, $ttl',
        ],
    'apcu_exists' =>
        [
            'signatureArguments' => '$keys',
            'arguments' => '$keys',
        ],
    'apcu_inc' =>
        [
            'signatureArguments' => '$key, $step = 1, &$success = null, $ttl = 0',
            'arguments' => '$key, $step, $success, $ttl',
        ],
    'apcu_dec' =>
        [
            'signatureArguments' => '$key, $step = 1, &$success = null, $ttl = 0',
            'arguments' => '$key, $step, $success, $ttl',
        ],
    'apcu_cas' =>
        [
            'signatureArguments' => '$key, $old, $new',
            'arguments' => '$key, $old, $new',
        ],
    'apcu_entry' =>
        [
            'signatureArguments' => '$key, callable $generator, $ttl = 0',
            'arguments' => '$key, $generator, $ttl',
        ],
    'apcu_cache_info' =>
        [
            'signatureArguments' => '$limited = false',
            'arguments' => '$limited',
        ],
    'apcu_enabled' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apcu_key_info' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'kafka_err2name' =>
        [
            'signatureArguments' => 'int $errorCode',
            'arguments' => '$errorCode',
        ],
    'kafka_err2str' =>
        [
            'signatureArguments' => 'int $errorCode',
            'arguments' => '$errorCode',
        ],
    'kafka_get_err_descs' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'kafka_offset_tail' =>
        [
            'signatureArguments' => 'int $offset',
            'arguments' => '$offset',
        ],
    'kafka_thread_cnt' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xmlwriter_open_uri' =>
        [
            'signatureArguments' => 'string $uri',
            'arguments' => '$uri',
        ],
    'xmlwriter_open_memory' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xmlwriter_set_indent' =>
        [
            'signatureArguments' => '$writer, bool $enable',
            'arguments' => '$writer, $enable',
        ],
    'xmlwriter_set_indent_string' =>
        [
            'signatureArguments' => '$writer, string $indentation',
            'arguments' => '$writer, $indentation',
        ],
    'xmlwriter_start_comment' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_end_comment' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_start_attribute' =>
        [
            'signatureArguments' => '$writer, string $name',
            'arguments' => '$writer, $name',
        ],
    'xmlwriter_end_attribute' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_write_attribute' =>
        [
            'signatureArguments' => '$writer, string $name, string $value',
            'arguments' => '$writer, $name, $value',
        ],
    'xmlwriter_start_attribute_ns' =>
        [
            'signatureArguments' => '$writer, ?string $prefix, string $name, ?string $namespace',
            'arguments' => '$writer, $prefix, $name, $namespace',
        ],
    'xmlwriter_write_attribute_ns' =>
        [
            'signatureArguments' => '$writer, ?string $prefix, string $name, ?string $namespace, string $value',
            'arguments' => '$writer, $prefix, $name, $namespace, $value',
        ],
    'xmlwriter_start_element' =>
        [
            'signatureArguments' => '$writer, string $name',
            'arguments' => '$writer, $name',
        ],
    'xmlwriter_end_element' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_full_end_element' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_start_element_ns' =>
        [
            'signatureArguments' => '$writer, ?string $prefix, string $name, ?string $namespace',
            'arguments' => '$writer, $prefix, $name, $namespace',
        ],
    'xmlwriter_write_element' =>
        [
            'signatureArguments' => '$writer, string $name, ?string $content',
            'arguments' => '$writer, $name, $content',
        ],
    'xmlwriter_write_element_ns' =>
        [
            'signatureArguments' => '$writer, ?string $prefix, string $name, ?string $namespace, ?string $content',
            'arguments' => '$writer, $prefix, $name, $namespace, $content',
        ],
    'xmlwriter_start_pi' =>
        [
            'signatureArguments' => '$writer, string $target',
            'arguments' => '$writer, $target',
        ],
    'xmlwriter_end_pi' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_write_pi' =>
        [
            'signatureArguments' => '$writer, string $target, string $content',
            'arguments' => '$writer, $target, $content',
        ],
    'xmlwriter_start_cdata' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_end_cdata' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_write_cdata' =>
        [
            'signatureArguments' => '$writer, string $content',
            'arguments' => '$writer, $content',
        ],
    'xmlwriter_text' =>
        [
            'signatureArguments' => '$writer, string $content',
            'arguments' => '$writer, $content',
        ],
    'xmlwriter_write_raw' =>
        [
            'signatureArguments' => '$writer, string $content',
            'arguments' => '$writer, $content',
        ],
    'xmlwriter_start_document' =>
        [
            'signatureArguments' => '$writer, ?string $version = \'1.0\', ?string $encoding, ?string $standalone',
            'arguments' => '$writer, $version, $encoding, $standalone',
        ],
    'xmlwriter_end_document' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_write_comment' =>
        [
            'signatureArguments' => '$writer, string $content',
            'arguments' => '$writer, $content',
        ],
    'xmlwriter_start_dtd' =>
        [
            'signatureArguments' => '$writer, string $qualifiedName, ?string $publicId, ?string $systemId',
            'arguments' => '$writer, $qualifiedName, $publicId, $systemId',
        ],
    'xmlwriter_end_dtd' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_write_dtd' =>
        [
            'signatureArguments' => '$writer, string $name, ?string $publicId, ?string $systemId, ?string $content',
            'arguments' => '$writer, $name, $publicId, $systemId, $content',
        ],
    'xmlwriter_start_dtd_element' =>
        [
            'signatureArguments' => '$writer, string $qualifiedName',
            'arguments' => '$writer, $qualifiedName',
        ],
    'xmlwriter_end_dtd_element' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_write_dtd_element' =>
        [
            'signatureArguments' => '$writer, string $name, string $content',
            'arguments' => '$writer, $name, $content',
        ],
    'xmlwriter_start_dtd_attlist' =>
        [
            'signatureArguments' => '$writer, string $name',
            'arguments' => '$writer, $name',
        ],
    'xmlwriter_end_dtd_attlist' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_write_dtd_attlist' =>
        [
            'signatureArguments' => '$writer, string $name, string $content',
            'arguments' => '$writer, $name, $content',
        ],
    'xmlwriter_start_dtd_entity' =>
        [
            'signatureArguments' => '$writer, string $name, bool $isParam',
            'arguments' => '$writer, $name, $isParam',
        ],
    'xmlwriter_end_dtd_entity' =>
        [
            'signatureArguments' => '$writer',
            'arguments' => '$writer',
        ],
    'xmlwriter_output_memory' =>
        [
            'signatureArguments' => '$writer, bool $flush = true',
            'arguments' => '$writer, $flush',
        ],
    'xmlwriter_flush' =>
        [
            'signatureArguments' => '$writer, bool $empty = true',
            'arguments' => '$writer, $empty',
        ],
    'accelerator_set_status' =>
        [
            'signatureArguments' => '$status',
            'arguments' => '$status',
        ],
    'output_cache_disable' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'output_cache_disable_compression' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'output_cache_fetch' =>
        [
            'signatureArguments' => '$key, $function, $lifetime',
            'arguments' => '$key, $function, $lifetime',
        ],
    'output_cache_output' =>
        [
            'signatureArguments' => '$key, $function, $lifetime',
            'arguments' => '$key, $function, $lifetime',
        ],
    'output_cache_remove' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'output_cache_remove_url' =>
        [
            'signatureArguments' => '$url',
            'arguments' => '$url',
        ],
    'output_cache_remove_key' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'output_cache_put' =>
        [
            'signatureArguments' => '$key, $data',
            'arguments' => '$key, $data',
        ],
    'output_cache_get' =>
        [
            'signatureArguments' => '$key, $lifetime',
            'arguments' => '$key, $lifetime',
        ],
    'output_cache_exists' =>
        [
            'signatureArguments' => '$key, $lifetime',
            'arguments' => '$key, $lifetime',
        ],
    'output_cache_stop' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'monitor_pass_error' =>
        [
            'signatureArguments' => '$errno, $errstr, $errfile, $errline',
            'arguments' => '$errno, $errstr, $errfile, $errline',
        ],
    'monitor_set_aggregation_hint' =>
        [
            'signatureArguments' => '$hint',
            'arguments' => '$hint',
        ],
    'monitor_custom_event' =>
        [
            'signatureArguments' => '$class, $text, $severe = null, $user_data = null',
            'arguments' => '$class, $text, $severe, $user_data',
        ],
    'monitor_httperror_event' =>
        [
            'signatureArguments' => '$error_code, $url, $severe = null',
            'arguments' => '$error_code, $url, $severe',
        ],
    'monitor_license_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'register_event_handler' =>
        [
            'signatureArguments' => '$event_handler_func, $handler_register_name, $event_type_mask',
            'arguments' => '$event_handler_func, $handler_register_name, $event_type_mask',
        ],
    'unregister_event_handler' =>
        [
            'signatureArguments' => '$handler_name',
            'arguments' => '$handler_name',
        ],
    'zend_send_file' =>
        [
            'signatureArguments' => '$filename, $mime_type, $custom_headers',
            'arguments' => '$filename, $mime_type, $custom_headers',
        ],
    'zend_send_buffer' =>
        [
            'signatureArguments' => '$buffer, $mime_type, $custom_headers',
            'arguments' => '$buffer, $mime_type, $custom_headers',
        ],
    'set_job_failed' =>
        [
            'signatureArguments' => '$error_string',
            'arguments' => '$error_string',
        ],
    'jobqueue_license_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'java' =>
        [
            'signatureArguments' => '$class',
            'arguments' => '$class',
        ],
    'java_last_exception_get' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'java_last_exception_clear' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'java_set_ignore_case' =>
        [
            'signatureArguments' => '$ignore',
            'arguments' => '$ignore',
        ],
    'java_set_encoding' =>
        [
            'signatureArguments' => '$encoding',
            'arguments' => '$encoding',
        ],
    'java_throw_exceptions' =>
        [
            'signatureArguments' => '$throw',
            'arguments' => '$throw',
        ],
    'java_reload' =>
        [
            'signatureArguments' => '$new_jarpath',
            'arguments' => '$new_jarpath',
        ],
    'java_require' =>
        [
            'signatureArguments' => '$new_classpath',
            'arguments' => '$new_classpath',
        ],
    'zend_loader_enabled' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_loader_file_encoded' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_loader_file_licensed' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_loader_current_file' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_loader_install_license' =>
        [
            'signatureArguments' => '$license_file, $override',
            'arguments' => '$license_file, $override',
        ],
    'zend_obfuscate_function_name' =>
        [
            'signatureArguments' => '$function_name',
            'arguments' => '$function_name',
        ],
    'zend_obfuscate_class_name' =>
        [
            'signatureArguments' => '$class_name',
            'arguments' => '$class_name',
        ],
    'zend_current_obfuscation_level' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_runtime_obfuscate' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_get_id' =>
        [
            'signatureArguments' => '$all_ids = false',
            'arguments' => '$all_ids',
        ],
    'zend_optimizer_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sem_get' =>
        [
            'signatureArguments' => 'int $key, int $max_acquire = 1, int $permissions = 0666, bool $auto_release = true',
            'arguments' => '$key, $max_acquire, $permissions, $auto_release',
        ],
    'sem_acquire' =>
        [
            'signatureArguments' => '$semaphore, bool $non_blocking = false',
            'arguments' => '$semaphore, $non_blocking',
        ],
    'sem_release' =>
        [
            'signatureArguments' => '$semaphore',
            'arguments' => '$semaphore',
        ],
    'sem_remove' =>
        [
            'signatureArguments' => '$semaphore',
            'arguments' => '$semaphore',
        ],
    'dba_open' =>
        [
            'signatureArguments' => 'string $path, string $mode, ?string $handler = null, int $permission = 0o644, int $map_size = 0, ?int $flags = null',
            'arguments' => '$path, $mode, $handler, $permission, $map_size, $flags',
        ],
    'dba_popen' =>
        [
            'signatureArguments' => 'string $path, string $mode, ?string $handler = null, int $permission = 0o644, int $map_size = 0, ?int $flags = null',
            'arguments' => '$path, $mode, $handler, $permission, $map_size, $flags',
        ],
    'dba_close' =>
        [
            'signatureArguments' => '$dba',
            'arguments' => '$dba',
        ],
    'dba_delete' =>
        [
            'signatureArguments' => '$key, $dba',
            'arguments' => '$key, $dba',
        ],
    'dba_exists' =>
        [
            'signatureArguments' => '$key, $dba',
            'arguments' => '$key, $dba',
        ],
    'dba_fetch' =>
        [
            'signatureArguments' => '$key, $skip, $dba',
            'arguments' => '$key, $skip, $dba',
        ],
    'dba_insert' =>
        [
            'signatureArguments' => '$key, string $value, $dba',
            'arguments' => '$key, $value, $dba',
        ],
    'dba_replace' =>
        [
            'signatureArguments' => '$key, string $value, $dba',
            'arguments' => '$key, $value, $dba',
        ],
    'dba_firstkey' =>
        [
            'signatureArguments' => '$dba',
            'arguments' => '$dba',
        ],
    'dba_nextkey' =>
        [
            'signatureArguments' => '$dba',
            'arguments' => '$dba',
        ],
    'dba_optimize' =>
        [
            'signatureArguments' => '$dba',
            'arguments' => '$dba',
        ],
    'dba_sync' =>
        [
            'signatureArguments' => '$dba',
            'arguments' => '$dba',
        ],
    'dba_handlers' =>
        [
            'signatureArguments' => 'bool $full_info = false',
            'arguments' => '$full_info',
        ],
    'dba_list' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'dba_key_split' =>
        [
            'signatureArguments' => 'string|false|null $key',
            'arguments' => '$key',
        ],
    'ldap_exop_refresh' =>
        [
            'signatureArguments' => '$ldap, string $dn, int $ttl',
            'arguments' => '$ldap, $dn, $ttl',
        ],
    'ldap_exop_whoami' =>
        [
            'signatureArguments' => '$ldap',
            'arguments' => '$ldap',
        ],
    'ldap_exop' =>
        [
            'signatureArguments' => '$controls = null, &$response_data, &$response_oid',
            'arguments' => '$controls, $response_data, $response_oid',
        ],
    'ldap_8859_to_t61' =>
        [
            'signatureArguments' => 'string $value',
            'arguments' => '$value',
        ],
    'ldap_t61_to_8859' =>
        [
            'signatureArguments' => 'string $value',
            'arguments' => '$value',
        ],
    'ldap_connect' =>
        [
            'signatureArguments' => '?string $uri, int $port = 389',
            'arguments' => '$uri, $port',
        ],
    'ldap_close' =>
        [
            'signatureArguments' => '$ldap',
            'arguments' => '$ldap',
        ],
    'ldap_bind' =>
        [
            'signatureArguments' => '$ldap, ?string $dn, ?string $password',
            'arguments' => '$ldap, $dn, $password',
        ],
    'ldap_sasl_bind' =>
        [
            'signatureArguments' => '$ldap, $binddn = null, $password = null, $sasl_mech = null, $sasl_realm = null, $sasl_authc_id = null, $sasl_authz_id = null, $props = null',
            'arguments' => '$ldap, $binddn, $password, $sasl_mech, $sasl_realm, $sasl_authc_id, $sasl_authz_id, $props',
        ],
    'ldap_unbind' =>
        [
            'signatureArguments' => '$ldap',
            'arguments' => '$ldap',
        ],
    'ldap_explode_dn' =>
        [
            'signatureArguments' => 'string $dn, int $with_attrib',
            'arguments' => '$dn, $with_attrib',
        ],
    'ldap_dn2ufn' =>
        [
            'signatureArguments' => 'string $dn',
            'arguments' => '$dn',
        ],
    'ldap_mod_replace_ext' =>
        [
            'signatureArguments' => '$controls = null',
            'arguments' => '$controls',
        ],
    'ldap_mod_del_ext' =>
        [
            'signatureArguments' => '$controls = null',
            'arguments' => '$controls',
        ],
    'ldap_errno' =>
        [
            'signatureArguments' => '$ldap',
            'arguments' => '$ldap',
        ],
    'ldap_err2str' =>
        [
            'signatureArguments' => 'int $errno',
            'arguments' => '$errno',
        ],
    'ldap_error' =>
        [
            'signatureArguments' => '$ldap',
            'arguments' => '$ldap',
        ],
    'ldap_sort' =>
        [
            'signatureArguments' => '$ldap, $result, string $sortfilter',
            'arguments' => '$ldap, $result, $sortfilter',
        ],
    'ldap_rename_ext' =>
        [
            'signatureArguments' => '$controls = null',
            'arguments' => '$controls',
        ],
    'ldap_start_tls' =>
        [
            'signatureArguments' => '$ldap',
            'arguments' => '$ldap',
        ],
    'ldap_set_rebind_proc' =>
        [
            'signatureArguments' => '$ldap, ?callable $callback',
            'arguments' => '$ldap, $callback',
        ],
    'ldap_control_paged_result' =>
        [
            'signatureArguments' => '$ldap, int $pagesize, $iscritical = false, $cookie = ""',
            'arguments' => '$ldap, $pagesize, $iscritical, $cookie',
        ],
    'ldap_control_paged_result_response' =>
        [
            'signatureArguments' => '$ldap, $result, &$cookie = null, &$estimated = null',
            'arguments' => '$ldap, $result, $cookie, $estimated',
        ],
    'ldap_escape' =>
        [
            'signatureArguments' => 'string $value, string $ignore = "", int $flags = 0',
            'arguments' => '$value, $ignore, $flags',
        ],
    'ldap_exop_sync' =>
        [
            'signatureArguments' => 'LDAP\\Connection $ldap, string $request_oid, ?string $request_data = null, ?array $controls = null, &$response_data = null, &$response_oid = null',
            'arguments' => '$ldap, $request_oid, $request_data, $controls, $response_data, $response_oid',
        ],
    'token_get_all' =>
        [
            'signatureArguments' => 'string $code, int $flags = 0',
            'arguments' => '$code, $flags',
        ],
    'token_name' =>
        [
            'signatureArguments' => 'int $id',
            'arguments' => '$id',
        ],
    'getSession' =>
        [
            'signatureArguments' => '$uri',
            'arguments' => '$uri',
        ],
    'expression' =>
        [
            'signatureArguments' => '$expression',
            'arguments' => '$expression',
        ],
    'strtotime' =>
        [
            'signatureArguments' => 'string $datetime, ?int $baseTimestamp',
            'arguments' => '$datetime, $baseTimestamp',
        ],
    'date' =>
        [
            'signatureArguments' => 'string $format, ?int $timestamp',
            'arguments' => '$format, $timestamp',
        ],
    'idate' =>
        [
            'signatureArguments' => 'string $format, ?int $timestamp',
            'arguments' => '$format, $timestamp',
        ],
    'gmdate' =>
        [
            'signatureArguments' => 'string $format, ?int $timestamp',
            'arguments' => '$format, $timestamp',
        ],
    'checkdate' =>
        [
            'signatureArguments' => 'int $month, int $day, int $year',
            'arguments' => '$month, $day, $year',
        ],
    'strftime' =>
        [
            'signatureArguments' => 'string $format, ?int $timestamp',
            'arguments' => '$format, $timestamp',
        ],
    'gmstrftime' =>
        [
            'signatureArguments' => 'string $format, ?int $timestamp',
            'arguments' => '$format, $timestamp',
        ],
    'time' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'localtime' =>
        [
            'signatureArguments' => '?int $timestamp, bool $associative = false',
            'arguments' => '$timestamp, $associative',
        ],
    'getdate' =>
        [
            'signatureArguments' => '?int $timestamp',
            'arguments' => '$timestamp',
        ],
    'date_create' =>
        [
            'signatureArguments' => 'string $datetime = \'now\', ?DateTimeZone $timezone',
            'arguments' => '$datetime, $timezone',
        ],
    'date_create_immutable' =>
        [
            'signatureArguments' => 'string $datetime = \'now\', ?DateTimeZone $timezone',
            'arguments' => '$datetime, $timezone',
        ],
    'date_create_immutable_from_format' =>
        [
            'signatureArguments' => 'string $format, string $datetime, ?DateTimeZone $timezone',
            'arguments' => '$format, $datetime, $timezone',
        ],
    'date_create_from_format' =>
        [
            'signatureArguments' => 'string $format, string $datetime, ?DateTimeZone $timezone',
            'arguments' => '$format, $datetime, $timezone',
        ],
    'date_parse' =>
        [
            'signatureArguments' => 'string $datetime',
            'arguments' => '$datetime',
        ],
    'date_parse_from_format' =>
        [
            'signatureArguments' => 'string $format, string $datetime',
            'arguments' => '$format, $datetime',
        ],
    'date_get_last_errors' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'date_format' =>
        [
            'signatureArguments' => 'DateTimeInterface $object, string $format',
            'arguments' => '$object, $format',
        ],
    'date_modify' =>
        [
            'signatureArguments' => 'DateTime $object, string $modifier',
            'arguments' => '$object, $modifier',
        ],
    'date_add' =>
        [
            'signatureArguments' => 'DateTime $object, DateInterval $interval',
            'arguments' => '$object, $interval',
        ],
    'date_sub' =>
        [
            'signatureArguments' => 'DateTime $object, DateInterval $interval',
            'arguments' => '$object, $interval',
        ],
    'date_timezone_get' =>
        [
            'signatureArguments' => 'DateTimeInterface $object',
            'arguments' => '$object',
        ],
    'date_timezone_set' =>
        [
            'signatureArguments' => '$object, DateTimeZone $timezone',
            'arguments' => '$object, $timezone',
        ],
    'date_offset_get' =>
        [
            'signatureArguments' => 'DateTimeInterface $object',
            'arguments' => '$object',
        ],
    'date_diff' =>
        [
            'signatureArguments' => 'DateTimeInterface $baseObject, DateTimeInterface $targetObject, bool $absolute = false',
            'arguments' => '$baseObject, $targetObject, $absolute',
        ],
    'date_date_set' =>
        [
            'signatureArguments' => 'DateTime $object, int $year, int $month, int $day',
            'arguments' => '$object, $year, $month, $day',
        ],
    'date_isodate_set' =>
        [
            'signatureArguments' => 'DateTime $object, int $year, int $week, int $dayOfWeek = 1',
            'arguments' => '$object, $year, $week, $dayOfWeek',
        ],
    'date_timestamp_set' =>
        [
            'signatureArguments' => 'DateTime $object, int $timestamp',
            'arguments' => '$object, $timestamp',
        ],
    'date_timestamp_get' =>
        [
            'signatureArguments' => 'DateTimeInterface $object',
            'arguments' => '$object',
        ],
    'timezone_open' =>
        [
            'signatureArguments' => 'string $timezone',
            'arguments' => '$timezone',
        ],
    'timezone_name_get' =>
        [
            'signatureArguments' => 'DateTimeZone $object',
            'arguments' => '$object',
        ],
    'timezone_name_from_abbr' =>
        [
            'signatureArguments' => 'string $abbr, int $utcOffset = -1, int $isDST = -1',
            'arguments' => '$abbr, $utcOffset, $isDST',
        ],
    'timezone_offset_get' =>
        [
            'signatureArguments' => 'DateTimeZone $object, DateTimeInterface $datetime',
            'arguments' => '$object, $datetime',
        ],
    'timezone_transitions_get' =>
        [
            'signatureArguments' => 'DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX',
            'arguments' => '$object, $timestampBegin, $timestampEnd',
        ],
    'timezone_location_get' =>
        [
            'signatureArguments' => 'DateTimeZone $object',
            'arguments' => '$object',
        ],
    'timezone_identifiers_list' =>
        [
            'signatureArguments' => 'int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode',
            'arguments' => '$timezoneGroup, $countryCode',
        ],
    'timezone_abbreviations_list' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'timezone_version_get' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'date_interval_create_from_date_string' =>
        [
            'signatureArguments' => 'string $datetime',
            'arguments' => '$datetime',
        ],
    'date_interval_format' =>
        [
            'signatureArguments' => 'DateInterval $object, string $format',
            'arguments' => '$object, $format',
        ],
    'date_default_timezone_set' =>
        [
            'signatureArguments' => 'string $timezoneId',
            'arguments' => '$timezoneId',
        ],
    'date_default_timezone_get' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'date_sunrise' =>
        [
            'signatureArguments' => 'int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude, ?float $longitude, ?float $zenith, ?float $utcOffset',
            'arguments' => '$timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset',
        ],
    'date_sunset' =>
        [
            'signatureArguments' => 'int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude, ?float $longitude, ?float $zenith, ?float $utcOffset',
            'arguments' => '$timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset',
        ],
    'date_sun_info' =>
        [
            'signatureArguments' => 'int $timestamp, float $latitude, float $longitude',
            'arguments' => '$timestamp, $latitude, $longitude',
        ],
    'readline' =>
        [
            'signatureArguments' => '?string $prompt',
            'arguments' => '$prompt',
        ],
    'readline_info' =>
        [
            'signatureArguments' => '?string $var_name, $value',
            'arguments' => '$var_name, $value',
        ],
    'readline_add_history' =>
        [
            'signatureArguments' => 'string $prompt',
            'arguments' => '$prompt',
        ],
    'readline_clear_history' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'readline_list_history' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'readline_read_history' =>
        [
            'signatureArguments' => '?string $filename',
            'arguments' => '$filename',
        ],
    'readline_write_history' =>
        [
            'signatureArguments' => '?string $filename',
            'arguments' => '$filename',
        ],
    'readline_completion_function' =>
        [
            'signatureArguments' => 'callable $callback',
            'arguments' => '$callback',
        ],
    'readline_callback_handler_install' =>
        [
            'signatureArguments' => 'string $prompt, callable $callback',
            'arguments' => '$prompt, $callback',
        ],
    'readline_callback_read_char' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'readline_callback_handler_remove' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'readline_redisplay' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'readline_on_new_line' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sqlsrv_connect' =>
        [
            'signatureArguments' => '$server_name, $connection_info = []',
            'arguments' => '$server_name, $connection_info',
        ],
    'sqlsrv_close' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'sqlsrv_commit' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'sqlsrv_begin_transaction' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'sqlsrv_rollback' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'sqlsrv_errors' =>
        [
            'signatureArguments' => '$errorsAndOrWarnings = SQLSRV_ERR_ALL',
            'arguments' => '$errorsAndOrWarnings',
        ],
    'sqlsrv_configure' =>
        [
            'signatureArguments' => '$setting, $value',
            'arguments' => '$setting, $value',
        ],
    'sqlsrv_get_config' =>
        [
            'signatureArguments' => '$setting',
            'arguments' => '$setting',
        ],
    'sqlsrv_prepare' =>
        [
            'signatureArguments' => '$conn, $tsql, $params = [], $options = []',
            'arguments' => '$conn, $tsql, $params, $options',
        ],
    'sqlsrv_execute' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_query' =>
        [
            'signatureArguments' => '$conn, $tsql, $params = [], $options = []',
            'arguments' => '$conn, $tsql, $params, $options',
        ],
    'sqlsrv_fetch' =>
        [
            'signatureArguments' => '$stmt, $row = null, $offset = null',
            'arguments' => '$stmt, $row, $offset',
        ],
    'sqlsrv_get_field' =>
        [
            'signatureArguments' => '$stmt, $field_index, $get_as_type = null',
            'arguments' => '$stmt, $field_index, $get_as_type',
        ],
    'sqlsrv_fetch_array' =>
        [
            'signatureArguments' => '$stmt, $fetch_type = null, $row = null, $offset = null',
            'arguments' => '$stmt, $fetch_type, $row, $offset',
        ],
    'sqlsrv_fetch_object' =>
        [
            'signatureArguments' => '$stmt, $class_name = null, $ctor_params = null, $row = null, $offset = null',
            'arguments' => '$stmt, $class_name, $ctor_params, $row, $offset',
        ],
    'sqlsrv_has_rows' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_num_fields' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_next_result' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_num_rows' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_rows_affected' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_client_info' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'sqlsrv_server_info' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'sqlsrv_cancel' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_free_stmt' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_field_metadata' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'sqlsrv_send_stream_data' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'SQLSRV_PHPTYPE_STREAM' =>
        [
            'signatureArguments' => '$encoding',
            'arguments' => '$encoding',
        ],
    'SQLSRV_PHPTYPE_STRING' =>
        [
            'signatureArguments' => '$encoding',
            'arguments' => '$encoding',
        ],
    'SQLSRV_SQLTYPE_BINARY' =>
        [
            'signatureArguments' => '$byteCount',
            'arguments' => '$byteCount',
        ],
    'SQLSRV_SQLTYPE_VARBINARY' =>
        [
            'signatureArguments' => '$byteCount',
            'arguments' => '$byteCount',
        ],
    'SQLSRV_SQLTYPE_VARCHAR' =>
        [
            'signatureArguments' => '$charCount',
            'arguments' => '$charCount',
        ],
    'SQLSRV_SQLTYPE_CHAR' =>
        [
            'signatureArguments' => '$charCount',
            'arguments' => '$charCount',
        ],
    'SQLSRV_SQLTYPE_NCHAR' =>
        [
            'signatureArguments' => '$charCount',
            'arguments' => '$charCount',
        ],
    'SQLSRV_SQLTYPE_NVARCHAR' =>
        [
            'signatureArguments' => '$charCount',
            'arguments' => '$charCount',
        ],
    'SQLSRV_SQLTYPE_DECIMAL' =>
        [
            'signatureArguments' => '$precision, $scale',
            'arguments' => '$precision, $scale',
        ],
    'SQLSRV_SQLTYPE_NUMERIC' =>
        [
            'signatureArguments' => '$precision, $scale',
            'arguments' => '$precision, $scale',
        ],
    'opcache_compile_file' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'opcache_invalidate' =>
        [
            'signatureArguments' => 'string $filename, bool $force = false',
            'arguments' => '$filename, $force',
        ],
    'opcache_reset' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'opcache_get_status' =>
        [
            'signatureArguments' => 'bool $include_scripts = true',
            'arguments' => '$include_scripts',
        ],
    'opcache_get_configuration' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'opcache_is_script_cached' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'ssh2_connect' =>
        [
            'signatureArguments' => '$host, $port = 22, ?array $methods = null, ?array $callbacks = null',
            'arguments' => '$host, $port, $methods, $callbacks',
        ],
    'ssh2_disconnect' =>
        [
            'signatureArguments' => '$session',
            'arguments' => '$session',
        ],
    'ssh2_methods_negotiated' =>
        [
            'signatureArguments' => '$session',
            'arguments' => '$session',
        ],
    'ssh2_fingerprint' =>
        [
            'signatureArguments' => '$session, $flags = null',
            'arguments' => '$session, $flags',
        ],
    'ssh2_auth_none' =>
        [
            'signatureArguments' => '$session, $username',
            'arguments' => '$session, $username',
        ],
    'ssh2_auth_password' =>
        [
            'signatureArguments' => '$session, $username, $password',
            'arguments' => '$session, $username, $password',
        ],
    'ssh2_auth_pubkey_file' =>
        [
            'signatureArguments' => '$session, $username, $pubkeyfile, $privkeyfile, $passphrase = null',
            'arguments' => '$session, $username, $pubkeyfile, $privkeyfile, $passphrase',
        ],
    'ssh2_auth_hostbased_file' =>
        [
            'signatureArguments' => '$session, $username, $hostname, $pubkeyfile, $privkeyfile, $passphrase = null, $local_username = null',
            'arguments' => '$session, $username, $hostname, $pubkeyfile, $privkeyfile, $passphrase, $local_username',
        ],
    'ssh2_forward_listen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ssh2_forward_accept' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ssh2_shell' =>
        [
            'signatureArguments' => '$session, $term_type = null, ?array $env = null, $width = null, $height = null, $width_height_type = null',
            'arguments' => '$session, $term_type, $env, $width, $height, $width_height_type',
        ],
    'ssh2_exec' =>
        [
            'signatureArguments' => '$session, $command, $pty = null, ?array $env = null, $width = null, $height = null, $width_height_type = null',
            'arguments' => '$session, $command, $pty, $env, $width, $height, $width_height_type',
        ],
    'ssh2_tunnel' =>
        [
            'signatureArguments' => '$session, $host, $port',
            'arguments' => '$session, $host, $port',
        ],
    'ssh2_scp_recv' =>
        [
            'signatureArguments' => '$session, $remote_file, $local_file',
            'arguments' => '$session, $remote_file, $local_file',
        ],
    'ssh2_scp_send' =>
        [
            'signatureArguments' => '$session, $local_file, $remote_file, $create_mode = null',
            'arguments' => '$session, $local_file, $remote_file, $create_mode',
        ],
    'ssh2_fetch_stream' =>
        [
            'signatureArguments' => '$channel, $streamid',
            'arguments' => '$channel, $streamid',
        ],
    'ssh2_poll' =>
        [
            'signatureArguments' => '&$var1',
            'arguments' => '$var1',
        ],
    'ssh2_sftp' =>
        [
            'signatureArguments' => '$session',
            'arguments' => '$session',
        ],
    'ssh2_sftp_rename' =>
        [
            'signatureArguments' => '$sftp, $from, $to',
            'arguments' => '$sftp, $from, $to',
        ],
    'ssh2_sftp_unlink' =>
        [
            'signatureArguments' => '$sftp, $filename',
            'arguments' => '$sftp, $filename',
        ],
    'ssh2_sftp_mkdir' =>
        [
            'signatureArguments' => '$sftp, $dirname, $mode = null, $recursive = null',
            'arguments' => '$sftp, $dirname, $mode, $recursive',
        ],
    'ssh2_sftp_rmdir' =>
        [
            'signatureArguments' => '$sftp, $dirname',
            'arguments' => '$sftp, $dirname',
        ],
    'ssh2_sftp_stat' =>
        [
            'signatureArguments' => '$sftp, $path',
            'arguments' => '$sftp, $path',
        ],
    'ssh2_sftp_lstat' =>
        [
            'signatureArguments' => '$sftp, $path',
            'arguments' => '$sftp, $path',
        ],
    'ssh2_sftp_symlink' =>
        [
            'signatureArguments' => '$sftp, $target, $link',
            'arguments' => '$sftp, $target, $link',
        ],
    'ssh2_sftp_readlink' =>
        [
            'signatureArguments' => '$sftp, $link',
            'arguments' => '$sftp, $link',
        ],
    'ssh2_sftp_realpath' =>
        [
            'signatureArguments' => '$sftp, $filename',
            'arguments' => '$sftp, $filename',
        ],
    'ssh2_publickey_init' =>
        [
            'signatureArguments' => '$session',
            'arguments' => '$session',
        ],
    'ssh2_publickey_add' =>
        [
            'signatureArguments' => '$pkey, $algoname, $blob, $overwrite = null, ?array $attributes = null',
            'arguments' => '$pkey, $algoname, $blob, $overwrite, $attributes',
        ],
    'ssh2_publickey_remove' =>
        [
            'signatureArguments' => '$pkey, $algoname, $blob',
            'arguments' => '$pkey, $algoname, $blob',
        ],
    'ssh2_publickey_list' =>
        [
            'signatureArguments' => '$pkey',
            'arguments' => '$pkey',
        ],
    'ssh2_sftp_chmod' =>
        [
            'signatureArguments' => '$sftp, $filename, $mode',
            'arguments' => '$sftp, $filename, $mode',
        ],
    'ssh2_auth_agent' =>
        [
            'signatureArguments' => '$session, $username',
            'arguments' => '$session, $username',
        ],
    'ssh2_send_eof' =>
        [
            'signatureArguments' => '$channel',
            'arguments' => '$channel',
        ],
    'foo' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'pdo_drivers' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'fpm_get_status' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'fastcgi_finish_request' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'geoip_database_info' =>
        [
            'signatureArguments' => '$database = GEOIP_COUNTRY_EDITION',
            'arguments' => '$database',
        ],
    'geoip_country_code_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_country_code3_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_country_name_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_continent_code_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_org_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_record_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_id_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_region_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_isp_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_db_avail' =>
        [
            'signatureArguments' => '$database',
            'arguments' => '$database',
        ],
    'geoip_db_get_all_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'geoip_db_filename' =>
        [
            'signatureArguments' => '$database',
            'arguments' => '$database',
        ],
    'geoip_region_name_by_code' =>
        [
            'signatureArguments' => '$country_code, $region_code',
            'arguments' => '$country_code, $region_code',
        ],
    'geoip_time_zone_by_country_and_region' =>
        [
            'signatureArguments' => '$country_code, $region_code = null',
            'arguments' => '$country_code, $region_code',
        ],
    'geoip_asnum_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_netspeedcell_by_name' =>
        [
            'signatureArguments' => '$hostname',
            'arguments' => '$hostname',
        ],
    'geoip_setup_custom_directory' =>
        [
            'signatureArguments' => '$path',
            'arguments' => '$path',
        ],
    'bzopen' =>
        [
            'signatureArguments' => '$file, string $mode',
            'arguments' => '$file, $mode',
        ],
    'bzread' =>
        [
            'signatureArguments' => '$bz, int $length = 1024',
            'arguments' => '$bz, $length',
        ],
    'bzwrite' =>
        [
            'signatureArguments' => '$bz, string $data, ?int $length',
            'arguments' => '$bz, $data, $length',
        ],
    'bzflush' =>
        [
            'signatureArguments' => '$bz',
            'arguments' => '$bz',
        ],
    'bzclose' =>
        [
            'signatureArguments' => '$bz',
            'arguments' => '$bz',
        ],
    'bzerrno' =>
        [
            'signatureArguments' => '$bz',
            'arguments' => '$bz',
        ],
    'bzerrstr' =>
        [
            'signatureArguments' => '$bz',
            'arguments' => '$bz',
        ],
    'bzerror' =>
        [
            'signatureArguments' => '$bz',
            'arguments' => '$bz',
        ],
    'bzdecompress' =>
        [
            'signatureArguments' => 'string $data, bool $use_less_memory = false',
            'arguments' => '$data, $use_less_memory',
        ],
    'recode_string' =>
        [
            'signatureArguments' => '$request, $string',
            'arguments' => '$request, $string',
        ],
    'recode_file' =>
        [
            'signatureArguments' => '$request, $input, $output',
            'arguments' => '$request, $input, $output',
        ],
    'recode' =>
        [
            'signatureArguments' => '$request, $str',
            'arguments' => '$request, $str',
        ],
    'sqlite_open' =>
        [
            'signatureArguments' => '$filename, $mode = null, &$error_message = null',
            'arguments' => '$filename, $mode, $error_message',
        ],
    'sqlite_popen' =>
        [
            'signatureArguments' => '$filename, $mode = null, &$error_message = null',
            'arguments' => '$filename, $mode, $error_message',
        ],
    'sqlite_close' =>
        [
            'signatureArguments' => '$dbhandle',
            'arguments' => '$dbhandle',
        ],
    'sqlite_query' =>
        [
            'signatureArguments' => '$query, $dbhandle, $result_type = SQLITE_BOTH, &$error_msg = null',
            'arguments' => '$query, $dbhandle, $result_type, $error_msg',
        ],
    'sqlite_exec' =>
        [
            'signatureArguments' => '$dbhandle, $query, &$error_msg = null',
            'arguments' => '$dbhandle, $query, $error_msg',
        ],
    'sqlite_array_query' =>
        [
            'signatureArguments' => '$dbhandle, $query, $result_type = null, $decode_binary = null',
            'arguments' => '$dbhandle, $query, $result_type, $decode_binary',
        ],
    'sqlite_single_query' =>
        [
            'signatureArguments' => '$db, $query, $first_row_only = null, $decode_binary = null',
            'arguments' => '$db, $query, $first_row_only, $decode_binary',
        ],
    'sqlite_fetch_array' =>
        [
            'signatureArguments' => '$result, $result_type = SQLITE_BOTH, $decode_binary = null',
            'arguments' => '$result, $result_type, $decode_binary',
        ],
    'sqlite_fetch_object' =>
        [
            'signatureArguments' => '$result, $class_name = null, ?array $ctor_params = null, $decode_binary = null',
            'arguments' => '$result, $class_name, $ctor_params, $decode_binary',
        ],
    'sqlite_fetch_single' =>
        [
            'signatureArguments' => '$result, $decode_binary = null',
            'arguments' => '$result, $decode_binary',
        ],
    'sqlite_fetch_string' =>
        [
            'signatureArguments' => '$result, $decode_binary',
            'arguments' => '$result, $decode_binary',
        ],
    'sqlite_fetch_all' =>
        [
            'signatureArguments' => '$result_type = null, $decode_binary = null',
            'arguments' => '$result_type, $decode_binary',
        ],
    'sqlite_current' =>
        [
            'signatureArguments' => '$result, $result_type = null, $decode_binary = null',
            'arguments' => '$result, $result_type, $decode_binary',
        ],
    'sqlite_column' =>
        [
            'signatureArguments' => '$result, $index_or_name, $decode_binary = null',
            'arguments' => '$result, $index_or_name, $decode_binary',
        ],
    'sqlite_libversion' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sqlite_libencoding' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sqlite_changes' =>
        [
            'signatureArguments' => '$db',
            'arguments' => '$db',
        ],
    'sqlite_last_insert_rowid' =>
        [
            'signatureArguments' => '$dbhandle',
            'arguments' => '$dbhandle',
        ],
    'sqlite_num_rows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sqlite_num_fields' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sqlite_field_name' =>
        [
            'signatureArguments' => '$result, $field_index',
            'arguments' => '$result, $field_index',
        ],
    'sqlite_seek' =>
        [
            'signatureArguments' => '$result, $rownum',
            'arguments' => '$result, $rownum',
        ],
    'sqlite_rewind' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sqlite_next' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sqlite_prev' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sqlite_valid' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sqlite_has_more' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sqlite_has_prev' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'sqlite_escape_string' =>
        [
            'signatureArguments' => '$item',
            'arguments' => '$item',
        ],
    'sqlite_busy_timeout' =>
        [
            'signatureArguments' => '$dbhandle, $milliseconds',
            'arguments' => '$dbhandle, $milliseconds',
        ],
    'sqlite_last_error' =>
        [
            'signatureArguments' => '$dbhandle',
            'arguments' => '$dbhandle',
        ],
    'sqlite_error_string' =>
        [
            'signatureArguments' => '$error_code',
            'arguments' => '$error_code',
        ],
    'sqlite_unbuffered_query' =>
        [
            'signatureArguments' => '$dbhandle, $query, $result_type = SQLITE_BOTH, &$error_msg = null',
            'arguments' => '$dbhandle, $query, $result_type, $error_msg',
        ],
    'sqlite_create_aggregate' =>
        [
            'signatureArguments' => '$dbhandle, $function_name, $step_func, $finalize_func, $num_args = null',
            'arguments' => '$dbhandle, $function_name, $step_func, $finalize_func, $num_args',
        ],
    'sqlite_create_function' =>
        [
            'signatureArguments' => '$dbhandle, $function_name, $callback, $num_args = null',
            'arguments' => '$dbhandle, $function_name, $callback, $num_args',
        ],
    'sqlite_factory' =>
        [
            'signatureArguments' => '$filename, $mode = null, &$error_message = null',
            'arguments' => '$filename, $mode, $error_message',
        ],
    'sqlite_udf_encode_binary' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'sqlite_udf_decode_binary' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'sqlite_fetch_column_types' =>
        [
            'signatureArguments' => '$dbhandle, $table_name, $result_type = null',
            'arguments' => '$dbhandle, $table_name, $result_type',
        ],
    'eio_event_loop' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'eio_poll' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'eio_open' =>
        [
            'signatureArguments' => 'string $path, int $flags, int $mode, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$path, $flags, $mode, $pri, $callback, $data',
        ],
    'eio_truncate' =>
        [
            'signatureArguments' => 'string $path, int $offset = 0, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $offset, $pri, $callback, $data',
        ],
    'eio_mkdir' =>
        [
            'signatureArguments' => 'string $path, int $mode, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $mode, $pri, $callback, $data',
        ],
    'eio_rmdir' =>
        [
            'signatureArguments' => 'string $path, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $pri, $callback, $data',
        ],
    'eio_unlink' =>
        [
            'signatureArguments' => 'string $path, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $pri, $callback, $data',
        ],
    'eio_utime' =>
        [
            'signatureArguments' => 'string $path, float $atime, float $mtime, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $atime, $mtime, $pri, $callback, $data',
        ],
    'eio_mknod' =>
        [
            'signatureArguments' => 'string $path, int $mode, int $dev, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $mode, $dev, $pri, $callback, $data',
        ],
    'eio_link' =>
        [
            'signatureArguments' => 'string $path, string $new_path, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $new_path, $pri, $callback, $data',
        ],
    'eio_symlink' =>
        [
            'signatureArguments' => 'string $path, string $new_path, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $new_path, $pri, $callback, $data',
        ],
    'eio_rename' =>
        [
            'signatureArguments' => 'string $path, string $new_path, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $new_path, $pri, $callback, $data',
        ],
    'eio_close' =>
        [
            'signatureArguments' => 'mixed $fd, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $pri, $callback, $data',
        ],
    'eio_sync' =>
        [
            'signatureArguments' => 'int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$pri, $callback, $data',
        ],
    'eio_fsync' =>
        [
            'signatureArguments' => 'mixed $fd, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $pri, $callback, $data',
        ],
    'eio_fdatasync' =>
        [
            'signatureArguments' => 'mixed $fd, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $pri, $callback, $data',
        ],
    'eio_futime' =>
        [
            'signatureArguments' => 'mixed $fd, float $atime, float $mtime, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $atime, $mtime, $pri, $callback, $data',
        ],
    'eio_ftruncate' =>
        [
            'signatureArguments' => 'mixed $fd, int $offset = 0, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $offset, $pri, $callback, $data',
        ],
    'eio_chmod' =>
        [
            'signatureArguments' => 'string $path, int $mode, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$path, $mode, $pri, $callback, $data',
        ],
    'eio_fchmod' =>
        [
            'signatureArguments' => 'mixed $fd, int $mode, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $mode, $pri, $callback, $data',
        ],
    'eio_chown' =>
        [
            'signatureArguments' => 'string $path, int $uid, int $gid = -1, int $pri = 0, mixed $callback = null, ?mixed $data = null',
            'arguments' => '$path, $uid, $gid, $pri, $callback, $data',
        ],
    'eio_fchown' =>
        [
            'signatureArguments' => 'mixed $fd, int $uid, int $gid = -1, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $uid, $gid, $pri, $callback, $data',
        ],
    'eio_dup2' =>
        [
            'signatureArguments' => 'mixed $fd, mixed $fd2, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $fd2, $pri, $callback, $data',
        ],
    'eio_read' =>
        [
            'signatureArguments' => 'mixed $fd, int $length, int $offset, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$fd, $length, $offset, $pri, $callback, $data',
        ],
    'eio_write' =>
        [
            'signatureArguments' => 'mixed $fd, mixed $str, int $length = 0, int $offset = 0, int $pri = 0, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $str, $length, $offset, $pri, $callback, $data',
        ],
    'eio_readlink' =>
        [
            'signatureArguments' => 'string $path, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$path, $pri, $callback, $data',
        ],
    'eio_realpath' =>
        [
            'signatureArguments' => 'string $path, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$path, $pri, $callback, $data',
        ],
    'eio_stat' =>
        [
            'signatureArguments' => 'string $path, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$path, $pri, $callback, $data',
        ],
    'eio_lstat' =>
        [
            'signatureArguments' => 'string $path, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$path, $pri, $callback, $data',
        ],
    'eio_fstat' =>
        [
            'signatureArguments' => 'mixed $fd, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$fd, $pri, $callback, $data',
        ],
    'eio_statvfs' =>
        [
            'signatureArguments' => 'string $path, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$path, $pri, $callback, $data',
        ],
    'eio_fstatvfs' =>
        [
            'signatureArguments' => 'mixed $fd, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$fd, $pri, $callback, $data',
        ],
    'eio_readdir' =>
        [
            'signatureArguments' => 'string $path, int $flags, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$path, $flags, $pri, $callback, $data',
        ],
    'eio_sendfile' =>
        [
            'signatureArguments' => 'mixed $out_fd, mixed $in_fd, int $offset, int $length, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$out_fd, $in_fd, $offset, $length, $pri, $callback, $data',
        ],
    'eio_readahead' =>
        [
            'signatureArguments' => 'mixed $fd, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $offset, $length, $pri, $callback, $data',
        ],
    'eio_seek' =>
        [
            'signatureArguments' => 'mixed $fd, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $offset, $length, $pri, $callback, $data',
        ],
    'eio_syncfs' =>
        [
            'signatureArguments' => 'mixed $fd, int $pri = EIO_PRI_DEFAULT, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $pri, $callback, $data',
        ],
    'eio_sync_file_range' =>
        [
            'signatureArguments' => 'mixed $fd, int $offset, int $nbytes, int $flags, int $pri = EIO_PRI_DEFAULT, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $offset, $nbytes, $flags, $pri, $callback, $data',
        ],
    'eio_fallocate' =>
        [
            'signatureArguments' => 'mixed $fd, int $mode, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, mixed $callback = null, mixed $data = null',
            'arguments' => '$fd, $mode, $offset, $length, $pri, $callback, $data',
        ],
    'eio_custom' =>
        [
            'signatureArguments' => 'mixed $execute, int $pri, mixed $callback, mixed $data = null',
            'arguments' => '$execute, $pri, $callback, $data',
        ],
    'eio_busy' =>
        [
            'signatureArguments' => 'int $delay, int $pri = EIO_PRI_DEFAULT, mixed $callback = null, mixed $data = null',
            'arguments' => '$delay, $pri, $callback, $data',
        ],
    'eio_nop' =>
        [
            'signatureArguments' => 'int $pri = EIO_PRI_DEFAULT, mixed $callback = null, mixed $data = null',
            'arguments' => '$pri, $callback, $data',
        ],
    'eio_cancel' =>
        [
            'signatureArguments' => '$req',
            'arguments' => '$req',
        ],
    'eio_grp' =>
        [
            'signatureArguments' => 'mixed $callback, mixed $data = null',
            'arguments' => '$callback, $data',
        ],
    'eio_grp_add' =>
        [
            'signatureArguments' => '$grp, $req',
            'arguments' => '$grp, $req',
        ],
    'eio_grp_limit' =>
        [
            'signatureArguments' => '$grp, int $limit',
            'arguments' => '$grp, $limit',
        ],
    'eio_grp_cancel' =>
        [
            'signatureArguments' => '$grp',
            'arguments' => '$grp',
        ],
    'eio_set_max_poll_time' =>
        [
            'signatureArguments' => 'float $nseconds',
            'arguments' => '$nseconds',
        ],
    'eio_set_max_poll_reqs' =>
        [
            'signatureArguments' => 'int $value',
            'arguments' => '$value',
        ],
    'eio_set_min_parallel' =>
        [
            'signatureArguments' => 'int $value',
            'arguments' => '$value',
        ],
    'eio_set_max_parallel' =>
        [
            'signatureArguments' => 'int $value',
            'arguments' => '$value',
        ],
    'eio_set_max_idle' =>
        [
            'signatureArguments' => 'int $value',
            'arguments' => '$value',
        ],
    'eio_nthreads' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'eio_nreqs' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'eio_nready' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'eio_npending' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'eio_get_event_stream' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'eio_get_last_error' =>
        [
            'signatureArguments' => '$req',
            'arguments' => '$req',
        ],
    'inotify_add_watch' =>
        [
            'signatureArguments' => '$inotify_instance, $pathname, $mask',
            'arguments' => '$inotify_instance, $pathname, $mask',
        ],
    'inotify_init' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'inotify_queue_len' =>
        [
            'signatureArguments' => '$inotify_instance',
            'arguments' => '$inotify_instance',
        ],
    'inotify_read' =>
        [
            'signatureArguments' => '$inotify_instance',
            'arguments' => '$inotify_instance',
        ],
    'inotify_rm_watch' =>
        [
            'signatureArguments' => '$inotify_instance, $mask',
            'arguments' => '$inotify_instance, $mask',
        ],
    'cubrid_connect' =>
        [
            'signatureArguments' => '$host, $port, $dbname, $userid = \'PUBLIC\', $passwd = \'\', $new_link = false',
            'arguments' => '$host, $port, $dbname, $userid, $passwd, $new_link',
        ],
    'cubrid_connect_with_url' =>
        [
            'signatureArguments' => '$conn_url, $userid = \'PUBLIC\', $passwd = \'\', $new_link = false',
            'arguments' => '$conn_url, $userid, $passwd, $new_link',
        ],
    'cubrid_pconnect' =>
        [
            'signatureArguments' => '$host, $port, $dbname, $userid = \'PUBLIC\', $passwd = \'\'',
            'arguments' => '$host, $port, $dbname, $userid, $passwd',
        ],
    'cubrid_pconnect_with_url' =>
        [
            'signatureArguments' => '$conn_url, $userid = \'PUBLIC\', $passwd = \'\'',
            'arguments' => '$conn_url, $userid, $passwd',
        ],
    'cubrid_close' =>
        [
            'signatureArguments' => '$conn_identifier = null',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_disconnect' =>
        [
            'signatureArguments' => '$conn_identifier = null',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_query' =>
        [
            'signatureArguments' => '$query, $conn_identifier = null',
            'arguments' => '$query, $conn_identifier',
        ],
    'cubrid_execute' =>
        [
            'signatureArguments' => '$request_identifier, $option = null',
            'arguments' => '$request_identifier, $option',
        ],
    'cubrid_bind' =>
        [
            'signatureArguments' => '$req_identifier, $bind_index, $bind_value, $bind_value_type = null',
            'arguments' => '$req_identifier, $bind_index, $bind_value, $bind_value_type',
        ],
    'cubrid_close_prepare' =>
        [
            'signatureArguments' => '$req_identifier',
            'arguments' => '$req_identifier',
        ],
    'cubrid_close_request' =>
        [
            'signatureArguments' => '$req_identifier',
            'arguments' => '$req_identifier',
        ],
    'cubrid_col_get' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr_name',
            'arguments' => '$conn_identifier, $oid, $attr_name',
        ],
    'cubrid_col_size' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr_name',
            'arguments' => '$conn_identifier, $oid, $attr_name',
        ],
    'cubrid_unbuffered_query' =>
        [
            'signatureArguments' => '$query, $conn_identifier = null',
            'arguments' => '$query, $conn_identifier',
        ],
    'cubrid_list_dbs' =>
        [
            'signatureArguments' => '$conn_identifier',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_error' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'cubrid_error_msg' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'cubrid_errno' =>
        [
            'signatureArguments' => '$conn_identifier = null',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_error_code' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'cubrid_affected_rows' =>
        [
            'signatureArguments' => '$conn_identifier = null',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_insert_id' =>
        [
            'signatureArguments' => '$conn_identifier = null',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_result' =>
        [
            'signatureArguments' => '$result, $row, $field = 0',
            'arguments' => '$result, $row, $field',
        ],
    'cubrid_num_rows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'cubrid_num_cols' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'cubrid_num_fields' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'cubrid_fetch' =>
        [
            'signatureArguments' => '$result, $type = CUBRID_BOTH',
            'arguments' => '$result, $type',
        ],
    'cubrid_fetch_row' =>
        [
            'signatureArguments' => '$result, $type = null',
            'arguments' => '$result, $type',
        ],
    'cubrid_fetch_array' =>
        [
            'signatureArguments' => '$result, $type = CUBRID_BOTH',
            'arguments' => '$result, $type',
        ],
    'cubrid_fetch_assoc' =>
        [
            'signatureArguments' => '$result, $type = null',
            'arguments' => '$result, $type',
        ],
    'cubrid_fetch_object' =>
        [
            'signatureArguments' => '$result, $class_name = null, $params = null, $type = null',
            'arguments' => '$result, $class_name, $params, $type',
        ],
    'cubrid_data_seek' =>
        [
            'signatureArguments' => '$result, $row_number',
            'arguments' => '$result, $row_number',
        ],
    'cubrid_fetch_lengths' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'cubrid_fetch_field' =>
        [
            'signatureArguments' => '$result, $field_offset = 0',
            'arguments' => '$result, $field_offset',
        ],
    'cubrid_column_names' =>
        [
            'signatureArguments' => '$req_identifier',
            'arguments' => '$req_identifier',
        ],
    'cubrid_column_types' =>
        [
            'signatureArguments' => '$req_identifier',
            'arguments' => '$req_identifier',
        ],
    'cubrid_field_seek' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'cubrid_free_result' =>
        [
            'signatureArguments' => '$req_identifier',
            'arguments' => '$req_identifier',
        ],
    'cubrid_field_name' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'cubrid_field_table' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'cubrid_field_len' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'cubrid_field_type' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'cubrid_field_flags' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'cubrid_real_escape_string' =>
        [
            'signatureArguments' => '$unescaped_string, $conn_identifier = null',
            'arguments' => '$unescaped_string, $conn_identifier',
        ],
    'cubrid_client_encoding' =>
        [
            'signatureArguments' => '$conn_identifier = null',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_ping' =>
        [
            'signatureArguments' => '$conn_identifier = null',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_get_client_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'cubrid_get_server_info' =>
        [
            'signatureArguments' => '$conn_identifier',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_get_db_parameter' =>
        [
            'signatureArguments' => '$conn_identifier',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_get_autocommit' =>
        [
            'signatureArguments' => '$conn_identifier',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_get_charset' =>
        [
            'signatureArguments' => '$conn_identifier',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_set_autocommit' =>
        [
            'signatureArguments' => '$conn_identifier, $mode',
            'arguments' => '$conn_identifier, $mode',
        ],
    'cubrid_db_name' =>
        [
            'signatureArguments' => '$result, $index',
            'arguments' => '$result, $index',
        ],
    'cubrid_db_parameter' =>
        [
            'signatureArguments' => '$conn_identifier',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_set_db_parameter' =>
        [
            'signatureArguments' => '$conn_identifier, $param_type, $param_value',
            'arguments' => '$conn_identifier, $param_type, $param_value',
        ],
    'cubrid_get_query_timeout' =>
        [
            'signatureArguments' => '$req_identifier',
            'arguments' => '$req_identifier',
        ],
    'cubrid_set_query_timeout' =>
        [
            'signatureArguments' => '$req_identifier, $timeout',
            'arguments' => '$req_identifier, $timeout',
        ],
    'cubrid_get_class_name' =>
        [
            'signatureArguments' => '$conn_identifier, $oid',
            'arguments' => '$conn_identifier, $oid',
        ],
    'cubrid_get' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr = null',
            'arguments' => '$conn_identifier, $oid, $attr',
        ],
    'cubrid_is_instance' =>
        [
            'signatureArguments' => '$conn_identifier, $oid',
            'arguments' => '$conn_identifier, $oid',
        ],
    'cubrid_commit' =>
        [
            'signatureArguments' => '$conn_identifier',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_rollback' =>
        [
            'signatureArguments' => '$conn_identifier',
            'arguments' => '$conn_identifier',
        ],
    'cubrid_current_oid' =>
        [
            'signatureArguments' => '$req_identifier',
            'arguments' => '$req_identifier',
        ],
    'cubrid_drop' =>
        [
            'signatureArguments' => '$conn_identifier, $oid',
            'arguments' => '$conn_identifier, $oid',
        ],
    'cubrid_error_code_facility' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'cubrid_lob_close' =>
        [
            'signatureArguments' => '$lob_identifier_array',
            'arguments' => '$lob_identifier_array',
        ],
    'cubrid_lob_export' =>
        [
            'signatureArguments' => '$conn_identifier, $lob_identifier, $path_name',
            'arguments' => '$conn_identifier, $lob_identifier, $path_name',
        ],
    'cubrid_lob_get' =>
        [
            'signatureArguments' => '$conn_identifier, $sql',
            'arguments' => '$conn_identifier, $sql',
        ],
    'cubrid_lob_send' =>
        [
            'signatureArguments' => '$conn_identifier, $lob_identifier',
            'arguments' => '$conn_identifier, $lob_identifier',
        ],
    'cubrid_lob_size' =>
        [
            'signatureArguments' => '$lob_identifier',
            'arguments' => '$lob_identifier',
        ],
    'cubrid_lob2_bind' =>
        [
            'signatureArguments' => '$req_identifier, $bind_index, $bind_value, $bind_value_type = null',
            'arguments' => '$req_identifier, $bind_index, $bind_value, $bind_value_type',
        ],
    'cubrid_lob2_close' =>
        [
            'signatureArguments' => '$lob_identifier',
            'arguments' => '$lob_identifier',
        ],
    'cubrid_lob2_export' =>
        [
            'signatureArguments' => '$lob_identifier, $file_name',
            'arguments' => '$lob_identifier, $file_name',
        ],
    'cubrid_lob2_import' =>
        [
            'signatureArguments' => '$lob_identifier, $file_name',
            'arguments' => '$lob_identifier, $file_name',
        ],
    'cubrid_lob2_new' =>
        [
            'signatureArguments' => '$conn_identifier = null, $type = "BLOB"',
            'arguments' => '$conn_identifier, $type',
        ],
    'cubrid_lob2_read' =>
        [
            'signatureArguments' => '$lob_identifier, $len',
            'arguments' => '$lob_identifier, $len',
        ],
    'cubrid_lob2_seek64' =>
        [
            'signatureArguments' => '$lob_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT',
            'arguments' => '$lob_identifier, $offset, $origin',
        ],
    'cubrid_lob2_seek' =>
        [
            'signatureArguments' => '$lob_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT',
            'arguments' => '$lob_identifier, $offset, $origin',
        ],
    'cubrid_lob2_size64' =>
        [
            'signatureArguments' => '$lob_identifier',
            'arguments' => '$lob_identifier',
        ],
    'cubrid_lob2_size' =>
        [
            'signatureArguments' => '$lob_identifier',
            'arguments' => '$lob_identifier',
        ],
    'cubrid_lob2_tell64' =>
        [
            'signatureArguments' => '$lob_identifier',
            'arguments' => '$lob_identifier',
        ],
    'cubrid_lob2_tell' =>
        [
            'signatureArguments' => '$lob_identifier',
            'arguments' => '$lob_identifier',
        ],
    'cubrid_lock_read' =>
        [
            'signatureArguments' => '$conn_identifier, $oid',
            'arguments' => '$conn_identifier, $oid',
        ],
    'cubrid_lock_write' =>
        [
            'signatureArguments' => '$conn_identifier, $oid',
            'arguments' => '$conn_identifier, $oid',
        ],
    'cubrid_move_cursor' =>
        [
            'signatureArguments' => '$req_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT',
            'arguments' => '$req_identifier, $offset, $origin',
        ],
    'cubrid_next_result' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'cubrid_prepare' =>
        [
            'signatureArguments' => '$conn_identifier, $prepare_stmt, $option = 0',
            'arguments' => '$conn_identifier, $prepare_stmt, $option',
        ],
    'cubrid_put' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr = null, $value',
            'arguments' => '$conn_identifier, $oid, $attr, $value',
        ],
    'cubrid_schema' =>
        [
            'signatureArguments' => '$conn_identifier, $schema_type, $class_name = null, $attr_name = null',
            'arguments' => '$conn_identifier, $schema_type, $class_name, $attr_name',
        ],
    'cubrid_seq_drop' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr_name, $index',
            'arguments' => '$conn_identifier, $oid, $attr_name, $index',
        ],
    'cubrid_seq_insert' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr_name, $index, $seq_element',
            'arguments' => '$conn_identifier, $oid, $attr_name, $index, $seq_element',
        ],
    'cubrid_seq_put' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr_name, $index, $seq_element',
            'arguments' => '$conn_identifier, $oid, $attr_name, $index, $seq_element',
        ],
    'cubrid_seq_add' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr_name, $seq_element',
            'arguments' => '$conn_identifier, $oid, $attr_name, $seq_element',
        ],
    'cubrid_set_add' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr_name, $set_element',
            'arguments' => '$conn_identifier, $oid, $attr_name, $set_element',
        ],
    'cubrid_set_drop' =>
        [
            'signatureArguments' => '$conn_identifier, $oid, $attr_name, $set_element',
            'arguments' => '$conn_identifier, $oid, $attr_name, $set_element',
        ],
    'cubrid_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'cubrid_lob2_write' =>
        [
            'signatureArguments' => '$lob_identifier, string $buf',
            'arguments' => '$lob_identifier, $buf',
        ],
    'use_soap_error_handler' =>
        [
            'signatureArguments' => 'bool $enable = true',
            'arguments' => '$enable',
        ],
    'is_soap_fault' =>
        [
            'signatureArguments' => 'mixed $object',
            'arguments' => '$object',
        ],
    'ereg' =>
        [
            'signatureArguments' => '$pattern, $string, ?array &$regs = null',
            'arguments' => '$pattern, $string, $regs',
        ],
    'ereg_replace' =>
        [
            'signatureArguments' => '$pattern, $replacement, $string',
            'arguments' => '$pattern, $replacement, $string',
        ],
    'eregi' =>
        [
            'signatureArguments' => '$pattern, $string, array &$regs = null',
            'arguments' => '$pattern, $string, $regs',
        ],
    'eregi_replace' =>
        [
            'signatureArguments' => '$pattern, $replacement, $string',
            'arguments' => '$pattern, $replacement, $string',
        ],
    'split' =>
        [
            'signatureArguments' => '$pattern, $string, $limit = -1',
            'arguments' => '$pattern, $string, $limit',
        ],
    'spliti' =>
        [
            'signatureArguments' => '$pattern, $string, $limit = -1',
            'arguments' => '$pattern, $string, $limit',
        ],
    'sql_regcase' =>
        [
            'signatureArguments' => '$string',
            'arguments' => '$string',
        ],
    'readgzfile' =>
        [
            'signatureArguments' => 'string $filename, int $use_include_path = 0',
            'arguments' => '$filename, $use_include_path',
        ],
    'gzrewind' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'gzclose' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'gzeof' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'gzgetc' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'gzgets' =>
        [
            'signatureArguments' => '$stream, ?int $length = null',
            'arguments' => '$stream, $length',
        ],
    'gzgetss' =>
        [
            'signatureArguments' => '$zp, int $length, $allowable_tags',
            'arguments' => '$zp, $length, $allowable_tags',
        ],
    'gzread' =>
        [
            'signatureArguments' => '$stream, int $length',
            'arguments' => '$stream, $length',
        ],
    'gzopen' =>
        [
            'signatureArguments' => 'string $filename, string $mode, int $use_include_path = 0',
            'arguments' => '$filename, $mode, $use_include_path',
        ],
    'gzpassthru' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'gzseek' =>
        [
            'signatureArguments' => '$stream, int $offset, int $whence = SEEK_SET',
            'arguments' => '$stream, $offset, $whence',
        ],
    'gztell' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'gzwrite' =>
        [
            'signatureArguments' => '$stream, string $data, ?int $length',
            'arguments' => '$stream, $data, $length',
        ],
    'gzputs' =>
        [
            'signatureArguments' => '$stream, string $data, ?int $length',
            'arguments' => '$stream, $data, $length',
        ],
    'gzfile' =>
        [
            'signatureArguments' => 'string $filename, int $use_include_path = 0',
            'arguments' => '$filename, $use_include_path',
        ],
    'gzcompress' =>
        [
            'signatureArguments' => 'string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE',
            'arguments' => '$data, $level, $encoding',
        ],
    'gzuncompress' =>
        [
            'signatureArguments' => 'string $data, int $max_length = 0',
            'arguments' => '$data, $max_length',
        ],
    'gzdeflate' =>
        [
            'signatureArguments' => 'string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW',
            'arguments' => '$data, $level, $encoding',
        ],
    'gzinflate' =>
        [
            'signatureArguments' => 'string $data, int $max_length = 0',
            'arguments' => '$data, $max_length',
        ],
    'gzencode' =>
        [
            'signatureArguments' => 'string $data, int $level = -1, int $encoding = FORCE_GZIP',
            'arguments' => '$data, $level, $encoding',
        ],
    'gzdecode' =>
        [
            'signatureArguments' => 'string $data, int $max_length = 0',
            'arguments' => '$data, $max_length',
        ],
    'zlib_encode' =>
        [
            'signatureArguments' => 'string $data, int $encoding, int $level = -1',
            'arguments' => '$data, $encoding, $level',
        ],
    'zlib_decode' =>
        [
            'signatureArguments' => 'string $data, int $max_length = 0',
            'arguments' => '$data, $max_length',
        ],
    'zlib_get_coding_type' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_gzhandler' =>
        [
            'signatureArguments' => 'string $data, int $flags',
            'arguments' => '$data, $flags',
        ],
    'deflate_init' =>
        [
            'signatureArguments' => 'int $encoding, array $options = []',
            'arguments' => '$encoding, $options',
        ],
    'deflate_add' =>
        [
            'signatureArguments' => '$context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH',
            'arguments' => '$context, $data, $flush_mode',
        ],
    'inflate_init' =>
        [
            'signatureArguments' => 'int $encoding, array $options = []',
            'arguments' => '$encoding, $options',
        ],
    'inflate_add' =>
        [
            'signatureArguments' => '$context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH',
            'arguments' => '$context, $data, $flush_mode',
        ],
    'inflate_get_read_len' =>
        [
            'signatureArguments' => '$context',
            'arguments' => '$context',
        ],
    'inflate_get_status' =>
        [
            'signatureArguments' => '$context',
            'arguments' => '$context',
        ],
    'pam_auth' =>
        [
            'signatureArguments' => 'string $username, string $password, string $error, bool $check_account_management = true, string $service_name = \'php\'',
            'arguments' => '$username, $password, $error, $check_account_management, $service_name',
        ],
    'pam_chpass' =>
        [
            'signatureArguments' => 'string $username, string $old_password, string $new_password, string $error, string $service_name = \'php\'',
            'arguments' => '$username, $old_password, $new_password, $error, $service_name',
        ],
    'toCanonicalExtendedJSON' =>
        [
            'signatureArguments' => '$bson',
            'arguments' => '$bson',
        ],
    'toRelaxedExtendedJSON' =>
        [
            'signatureArguments' => '$bson',
            'arguments' => '$bson',
        ],
    'fromJSON' =>
        [
            'signatureArguments' => '$json',
            'arguments' => '$json',
        ],
    'fromPHP' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'toJSON' =>
        [
            'signatureArguments' => '$bson',
            'arguments' => '$bson',
        ],
    'toPHP' =>
        [
            'signatureArguments' => '$bson, array $typemap = []',
            'arguments' => '$bson, $typemap',
        ],
    'addSubscriber' =>
        [
            'signatureArguments' => 'Subscriber $subscriber',
            'arguments' => '$subscriber',
        ],
    'removeSubscriber' =>
        [
            'signatureArguments' => 'Subscriber $subscriber',
            'arguments' => '$subscriber',
        ],
    'xml_parser_create' =>
        [
            'signatureArguments' => '?string $encoding',
            'arguments' => '$encoding',
        ],
    'xml_parser_create_ns' =>
        [
            'signatureArguments' => '?string $encoding, string $separator = \':\'',
            'arguments' => '$encoding, $separator',
        ],
    'xml_set_object' =>
        [
            'signatureArguments' => '$parser, object $object',
            'arguments' => '$parser, $object',
        ],
    'xml_set_element_handler' =>
        [
            'signatureArguments' => '$parser, $start_handler, $end_handler',
            'arguments' => '$parser, $start_handler, $end_handler',
        ],
    'xml_set_character_data_handler' =>
        [
            'signatureArguments' => '$parser, $handler',
            'arguments' => '$parser, $handler',
        ],
    'xml_set_processing_instruction_handler' =>
        [
            'signatureArguments' => '$parser, $handler',
            'arguments' => '$parser, $handler',
        ],
    'xml_set_default_handler' =>
        [
            'signatureArguments' => '$parser, $handler',
            'arguments' => '$parser, $handler',
        ],
    'xml_set_unparsed_entity_decl_handler' =>
        [
            'signatureArguments' => '$parser, $handler',
            'arguments' => '$parser, $handler',
        ],
    'xml_set_notation_decl_handler' =>
        [
            'signatureArguments' => '$parser, $handler',
            'arguments' => '$parser, $handler',
        ],
    'xml_set_external_entity_ref_handler' =>
        [
            'signatureArguments' => '$parser, $handler',
            'arguments' => '$parser, $handler',
        ],
    'xml_set_start_namespace_decl_handler' =>
        [
            'signatureArguments' => '$parser, $handler',
            'arguments' => '$parser, $handler',
        ],
    'xml_set_end_namespace_decl_handler' =>
        [
            'signatureArguments' => '$parser, $handler',
            'arguments' => '$parser, $handler',
        ],
    'xml_parse' =>
        [
            'signatureArguments' => '$parser, string $data, bool $is_final = false',
            'arguments' => '$parser, $data, $is_final',
        ],
    'xml_parse_into_struct' =>
        [
            'signatureArguments' => '$parser, string $data, &$values, &$index',
            'arguments' => '$parser, $data, $values, $index',
        ],
    'xml_get_error_code' =>
        [
            'signatureArguments' => '$parser',
            'arguments' => '$parser',
        ],
    'xml_error_string' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'xml_get_current_line_number' =>
        [
            'signatureArguments' => '$parser',
            'arguments' => '$parser',
        ],
    'xml_get_current_column_number' =>
        [
            'signatureArguments' => '$parser',
            'arguments' => '$parser',
        ],
    'xml_get_current_byte_index' =>
        [
            'signatureArguments' => '$parser',
            'arguments' => '$parser',
        ],
    'xml_parser_free' =>
        [
            'signatureArguments' => '$parser',
            'arguments' => '$parser',
        ],
    'xml_parser_set_option' =>
        [
            'signatureArguments' => '$parser, int $option, $value',
            'arguments' => '$parser, $option, $value',
        ],
    'xml_parser_get_option' =>
        [
            'signatureArguments' => '$parser, int $option',
            'arguments' => '$parser, $option',
        ],
    'radius_acct_open' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'radius_add_server' =>
        [
            'signatureArguments' => '$radius_handle, $hostname, $port, $secret, $timeout, $max_tries',
            'arguments' => '$radius_handle, $hostname, $port, $secret, $timeout, $max_tries',
        ],
    'radius_auth_open' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'radius_close' =>
        [
            'signatureArguments' => '$radius_handle',
            'arguments' => '$radius_handle',
        ],
    'radius_config' =>
        [
            'signatureArguments' => '$radius_handle, $file',
            'arguments' => '$radius_handle, $file',
        ],
    'radius_create_request' =>
        [
            'signatureArguments' => '$radius_handle, $type',
            'arguments' => '$radius_handle, $type',
        ],
    'solr_get_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'PS_UNRESERVE_PREFIX___halt_compiler' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'hex2bin' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'http_response_code' =>
        [
            'signatureArguments' => 'int $response_code = 0',
            'arguments' => '$response_code',
        ],
    'strtoupper' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'strtolower' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'strpos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0',
            'arguments' => '$haystack, $needle, $offset',
        ],
    'stripos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0',
            'arguments' => '$haystack, $needle, $offset',
        ],
    'strrpos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0',
            'arguments' => '$haystack, $needle, $offset',
        ],
    'strripos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0',
            'arguments' => '$haystack, $needle, $offset',
        ],
    'strrev' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'hebrev' =>
        [
            'signatureArguments' => 'string $string, int $max_chars_per_line = 0',
            'arguments' => '$string, $max_chars_per_line',
        ],
    'hebrevc' =>
        [
            'signatureArguments' => 'string $hebrew_text, $max_chars_per_line',
            'arguments' => '$hebrew_text, $max_chars_per_line',
        ],
    'nl2br' =>
        [
            'signatureArguments' => 'string $string, bool $use_xhtml = true',
            'arguments' => '$string, $use_xhtml',
        ],
    'basename' =>
        [
            'signatureArguments' => 'string $path, string $suffix = \'\'',
            'arguments' => '$path, $suffix',
        ],
    'dirname' =>
        [
            'signatureArguments' => 'string $path, int $levels = 1',
            'arguments' => '$path, $levels',
        ],
    'stripslashes' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'stripcslashes' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'strstr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $before_needle = false',
            'arguments' => '$haystack, $needle, $before_needle',
        ],
    'stristr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $before_needle = false',
            'arguments' => '$haystack, $needle, $before_needle',
        ],
    'strrchr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $before_needle = false',
            'arguments' => '$haystack, $needle, $before_needle',
        ],
    'str_shuffle' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'str_word_count' =>
        [
            'signatureArguments' => 'string $string, int $format = 0, ?string $characters',
            'arguments' => '$string, $format, $characters',
        ],
    'str_split' =>
        [
            'signatureArguments' => 'string $string, int $length = 1',
            'arguments' => '$string, $length',
        ],
    'substr_compare' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset, ?int $length, bool $case_insensitive = false',
            'arguments' => '$haystack, $needle, $offset, $length, $case_insensitive',
        ],
    'strcoll' =>
        [
            'signatureArguments' => 'string $string1, string $string2',
            'arguments' => '$string1, $string2',
        ],
    'money_format' =>
        [
            'signatureArguments' => 'string $format, float $number',
            'arguments' => '$format, $number',
        ],
    'substr' =>
        [
            'signatureArguments' => 'string $string, int $offset, ?int $length',
            'arguments' => '$string, $offset, $length',
        ],
    'substr_replace' =>
        [
            'signatureArguments' => 'array|string $string, array|string $replace, array|int $offset, array|int|null $length = null',
            'arguments' => '$string, $replace, $offset, $length',
        ],
    'quotemeta' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'ucfirst' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'lcfirst' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'ucwords' =>
        [
            'signatureArguments' => 'string $string, string $separators = " \\t\\r\\n\\f\\v"',
            'arguments' => '$string, $separators',
        ],
    'strtr' =>
        [
            'signatureArguments' => 'string $str, array $replace_pairs',
            'arguments' => '$str, $replace_pairs',
        ],
    'addslashes' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'addcslashes' =>
        [
            'signatureArguments' => 'string $string, string $characters',
            'arguments' => '$string, $characters',
        ],
    'rtrim' =>
        [
            'signatureArguments' => 'string $string, string $characters = " \\n\\r\\t\\v\\0"',
            'arguments' => '$string, $characters',
        ],
    'str_replace' =>
        [
            'signatureArguments' => 'array|string $search, array|string $replace, array|string $subject, &$count',
            'arguments' => '$search, $replace, $subject, $count',
        ],
    'str_ireplace' =>
        [
            'signatureArguments' => 'array|string $search, array|string $replace, array|string $subject, &$count',
            'arguments' => '$search, $replace, $subject, $count',
        ],
    'str_repeat' =>
        [
            'signatureArguments' => 'string $string, int $times',
            'arguments' => '$string, $times',
        ],
    'count_chars' =>
        [
            'signatureArguments' => 'string $string, int $mode = 0',
            'arguments' => '$string, $mode',
        ],
    'chunk_split' =>
        [
            'signatureArguments' => 'string $string, int $length = 76, string $separator = "\\r\\n"',
            'arguments' => '$string, $length, $separator',
        ],
    'trim' =>
        [
            'signatureArguments' => 'string $string, string $characters = " \\n\\r\\t\\v\\0"',
            'arguments' => '$string, $characters',
        ],
    'ltrim' =>
        [
            'signatureArguments' => 'string $string, string $characters = " \\n\\r\\t\\v\\0"',
            'arguments' => '$string, $characters',
        ],
    'strip_tags' =>
        [
            'signatureArguments' => 'string $string, $allowed_tags = null',
            'arguments' => '$string, $allowed_tags',
        ],
    'similar_text' =>
        [
            'signatureArguments' => 'string $string1, string $string2, &$percent',
            'arguments' => '$string1, $string2, $percent',
        ],
    'explode' =>
        [
            'signatureArguments' => 'string $separator, string $string, int $limit = PHP_INT_MAX',
            'arguments' => '$separator, $string, $limit',
        ],
    'implode' =>
        [
            'signatureArguments' => 'array|string $separator = "", ?array $array',
            'arguments' => '$separator, $array',
        ],
    'join' =>
        [
            'signatureArguments' => 'array|string $separator = "", ?array $array',
            'arguments' => '$separator, $array',
        ],
    'localeconv' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'constant' =>
        [
            'signatureArguments' => 'string $name',
            'arguments' => '$name',
        ],
    'bin2hex' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'sleep' =>
        [
            'signatureArguments' => 'int $seconds',
            'arguments' => '$seconds',
        ],
    'usleep' =>
        [
            'signatureArguments' => 'int $microseconds',
            'arguments' => '$microseconds',
        ],
    'time_nanosleep' =>
        [
            'signatureArguments' => 'int $seconds, int $nanoseconds',
            'arguments' => '$seconds, $nanoseconds',
        ],
    'time_sleep_until' =>
        [
            'signatureArguments' => 'float $timestamp',
            'arguments' => '$timestamp',
        ],
    'strptime' =>
        [
            'signatureArguments' => 'string $timestamp, string $format',
            'arguments' => '$timestamp, $format',
        ],
    'flush' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wordwrap' =>
        [
            'signatureArguments' => 'string $string, int $width = 75, string $break = "\\n", bool $cut_long_words = false',
            'arguments' => '$string, $width, $break, $cut_long_words',
        ],
    'htmlspecialchars' =>
        [
            'signatureArguments' => 'string $string, int $flags = ENT_QUOTES|ENT_SUBSTITUTE, ?string $encoding = null, bool $double_encode = true',
            'arguments' => '$string, $flags, $encoding, $double_encode',
        ],
    'htmlentities' =>
        [
            'signatureArguments' => 'string $string, int $flags = ENT_QUOTES|ENT_SUBSTITUTE, ?string $encoding, bool $double_encode = true',
            'arguments' => '$string, $flags, $encoding, $double_encode',
        ],
    'html_entity_decode' =>
        [
            'signatureArguments' => 'string $string, int $flags = ENT_QUOTES|ENT_SUBSTITUTE, ?string $encoding',
            'arguments' => '$string, $flags, $encoding',
        ],
    'htmlspecialchars_decode' =>
        [
            'signatureArguments' => 'string $string, int $flags = ENT_QUOTES|ENT_SUBSTITUTE',
            'arguments' => '$string, $flags',
        ],
    'sha1' =>
        [
            'signatureArguments' => 'string $string, bool $binary = false',
            'arguments' => '$string, $binary',
        ],
    'sha1_file' =>
        [
            'signatureArguments' => 'string $filename, bool $binary = false',
            'arguments' => '$filename, $binary',
        ],
    'md5' =>
        [
            'signatureArguments' => 'string $string, bool $binary = false',
            'arguments' => '$string, $binary',
        ],
    'md5_file' =>
        [
            'signatureArguments' => 'string $filename, bool $binary = false',
            'arguments' => '$filename, $binary',
        ],
    'crc32' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'iptcparse' =>
        [
            'signatureArguments' => 'string $iptc_block',
            'arguments' => '$iptc_block',
        ],
    'iptcembed' =>
        [
            'signatureArguments' => 'string $iptc_data, string $filename, int $spool = 0',
            'arguments' => '$iptc_data, $filename, $spool',
        ],
    'getimagesize' =>
        [
            'signatureArguments' => 'string $filename, &$image_info',
            'arguments' => '$filename, $image_info',
        ],
    'image_type_to_mime_type' =>
        [
            'signatureArguments' => 'int $image_type',
            'arguments' => '$image_type',
        ],
    'image_type_to_extension' =>
        [
            'signatureArguments' => 'int $image_type, bool $include_dot = true',
            'arguments' => '$image_type, $include_dot',
        ],
    'phpinfo' =>
        [
            'signatureArguments' => 'int $flags = INFO_ALL',
            'arguments' => '$flags',
        ],
    'phpversion' =>
        [
            'signatureArguments' => '?string $extension',
            'arguments' => '$extension',
        ],
    'phpcredits' =>
        [
            'signatureArguments' => 'int $flags = CREDITS_ALL',
            'arguments' => '$flags',
        ],
    'php_logo_guid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'php_real_logo_guid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'php_egg_logo_guid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_logo_guid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'php_sapi_name' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'php_uname' =>
        [
            'signatureArguments' => 'string $mode = \'a\'',
            'arguments' => '$mode',
        ],
    'php_ini_scanned_files' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'php_ini_loaded_file' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'strnatcmp' =>
        [
            'signatureArguments' => 'string $string1, string $string2',
            'arguments' => '$string1, $string2',
        ],
    'strnatcasecmp' =>
        [
            'signatureArguments' => 'string $string1, string $string2',
            'arguments' => '$string1, $string2',
        ],
    'substr_count' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0, ?int $length',
            'arguments' => '$haystack, $needle, $offset, $length',
        ],
    'strspn' =>
        [
            'signatureArguments' => 'string $string, string $characters, int $offset = 0, ?int $length',
            'arguments' => '$string, $characters, $offset, $length',
        ],
    'strcspn' =>
        [
            'signatureArguments' => 'string $string, string $characters, int $offset = 0, ?int $length',
            'arguments' => '$string, $characters, $offset, $length',
        ],
    'nl_langinfo' =>
        [
            'signatureArguments' => 'int $item',
            'arguments' => '$item',
        ],
    'soundex' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'levenshtein' =>
        [
            'signatureArguments' => 'string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1',
            'arguments' => '$string1, $string2, $insertion_cost, $replacement_cost, $deletion_cost',
        ],
    'chr' =>
        [
            'signatureArguments' => 'int $codepoint',
            'arguments' => '$codepoint',
        ],
    'ord' =>
        [
            'signatureArguments' => 'string $character',
            'arguments' => '$character',
        ],
    'str_getcsv' =>
        [
            'signatureArguments' => 'string $string, string $separator = ",", string $enclosure = \'"\', string $escape = "\\\\"',
            'arguments' => '$string, $separator, $enclosure, $escape',
        ],
    'str_pad' =>
        [
            'signatureArguments' => 'string $string, int $length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT',
            'arguments' => '$string, $length, $pad_string, $pad_type',
        ],
    'chop' =>
        [
            'signatureArguments' => 'string $string, string $characters = " \\n\\r\\t\\v\\0"',
            'arguments' => '$string, $characters',
        ],
    'strchr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $before_needle = false',
            'arguments' => '$haystack, $needle, $before_needle',
        ],
    'printf' =>
        [
            'signatureArguments' => 'string $format, mixed ...$values',
            'arguments' => '$format, $values',
        ],
    'vprintf' =>
        [
            'signatureArguments' => 'string $format, array $values',
            'arguments' => '$format, $values',
        ],
    'vsprintf' =>
        [
            'signatureArguments' => 'string $format, array $values',
            'arguments' => '$format, $values',
        ],
    'fprintf' =>
        [
            'signatureArguments' => '$stream, string $format, mixed ...$values',
            'arguments' => '$stream, $format, $values',
        ],
    'vfprintf' =>
        [
            'signatureArguments' => '$stream, string $format, array $values',
            'arguments' => '$stream, $format, $values',
        ],
    'sscanf' =>
        [
            'signatureArguments' => 'string $string, string $format, mixed &...$vars',
            'arguments' => '$string, $format, $vars',
        ],
    'fscanf' =>
        [
            'signatureArguments' => '$stream, string $format, mixed &...$vars',
            'arguments' => '$stream, $format, $vars',
        ],
    'parse_url' =>
        [
            'signatureArguments' => 'string $url, int $component = -1',
            'arguments' => '$url, $component',
        ],
    'urlencode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'urldecode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'rawurlencode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'rawurldecode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'http_build_query' =>
        [
            'signatureArguments' => 'object|array $data, string $numeric_prefix = "", ?string $arg_separator = null, int $encoding_type = PHP_QUERY_RFC1738',
            'arguments' => '$data, $numeric_prefix, $arg_separator, $encoding_type',
        ],
    'readlink' =>
        [
            'signatureArguments' => 'string $path',
            'arguments' => '$path',
        ],
    'linkinfo' =>
        [
            'signatureArguments' => 'string $path',
            'arguments' => '$path',
        ],
    'symlink' =>
        [
            'signatureArguments' => 'string $target, string $link',
            'arguments' => '$target, $link',
        ],
    'link' =>
        [
            'signatureArguments' => 'string $target, string $link',
            'arguments' => '$target, $link',
        ],
    'unlink' =>
        [
            'signatureArguments' => 'string $filename, $context',
            'arguments' => '$filename, $context',
        ],
    'exec' =>
        [
            'signatureArguments' => 'string $command, &$output, &$result_code',
            'arguments' => '$command, $output, $result_code',
        ],
    'system' =>
        [
            'signatureArguments' => 'string $command, &$result_code',
            'arguments' => '$command, $result_code',
        ],
    'escapeshellcmd' =>
        [
            'signatureArguments' => 'string $command',
            'arguments' => '$command',
        ],
    'escapeshellarg' =>
        [
            'signatureArguments' => 'string $arg',
            'arguments' => '$arg',
        ],
    'passthru' =>
        [
            'signatureArguments' => 'string $command, &$result_code',
            'arguments' => '$command, $result_code',
        ],
    'shell_exec' =>
        [
            'signatureArguments' => 'string $command',
            'arguments' => '$command',
        ],
    'proc_open' =>
        [
            'signatureArguments' => 'array|string $command, array $descriptor_spec, &$pipes, ?string $cwd, ?array $env_vars, ?array $options',
            'arguments' => '$command, $descriptor_spec, $pipes, $cwd, $env_vars, $options',
        ],
    'proc_close' =>
        [
            'signatureArguments' => '$process',
            'arguments' => '$process',
        ],
    'proc_terminate' =>
        [
            'signatureArguments' => '$process, int $signal = 15',
            'arguments' => '$process, $signal',
        ],
    'proc_get_status' =>
        [
            'signatureArguments' => '$process',
            'arguments' => '$process',
        ],
    'proc_nice' =>
        [
            'signatureArguments' => 'int $priority',
            'arguments' => '$priority',
        ],
    'getservbyname' =>
        [
            'signatureArguments' => 'string $service, string $protocol',
            'arguments' => '$service, $protocol',
        ],
    'getservbyport' =>
        [
            'signatureArguments' => 'int $port, string $protocol',
            'arguments' => '$port, $protocol',
        ],
    'getprotobyname' =>
        [
            'signatureArguments' => 'string $protocol',
            'arguments' => '$protocol',
        ],
    'getprotobynumber' =>
        [
            'signatureArguments' => 'int $protocol',
            'arguments' => '$protocol',
        ],
    'getmyuid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'getmygid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'getmypid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'getmyinode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'getlastmod' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'base64_decode' =>
        [
            'signatureArguments' => 'string $string, bool $strict = false',
            'arguments' => '$string, $strict',
        ],
    'base64_encode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'convert_uuencode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'convert_uudecode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'abs' =>
        [
            'signatureArguments' => 'int|float $num',
            'arguments' => '$num',
        ],
    'ceil' =>
        [
            'signatureArguments' => 'int|float $num',
            'arguments' => '$num',
        ],
    'floor' =>
        [
            'signatureArguments' => 'int|float $num',
            'arguments' => '$num',
        ],
    'round' =>
        [
            'signatureArguments' => 'int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP',
            'arguments' => '$num, $precision, $mode',
        ],
    'sin' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'cos' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'tan' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'asin' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'acos' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'atan' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'atanh' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'atan2' =>
        [
            'signatureArguments' => 'float $y, float $x',
            'arguments' => '$y, $x',
        ],
    'sinh' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'cosh' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'tanh' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'asinh' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'acosh' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'expm1' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'log1p' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'pi' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'is_finite' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'is_nan' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'intdiv' =>
        [
            'signatureArguments' => 'int $num1, int $num2',
            'arguments' => '$num1, $num2',
        ],
    'is_infinite' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'pow' =>
        [
            'signatureArguments' => 'mixed $num, mixed $exponent',
            'arguments' => '$num, $exponent',
        ],
    'exp' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'log' =>
        [
            'signatureArguments' => 'float $num, float $base = M_E',
            'arguments' => '$num, $base',
        ],
    'log10' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'sqrt' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'hypot' =>
        [
            'signatureArguments' => 'float $x, float $y',
            'arguments' => '$x, $y',
        ],
    'deg2rad' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'rad2deg' =>
        [
            'signatureArguments' => 'float $num',
            'arguments' => '$num',
        ],
    'bindec' =>
        [
            'signatureArguments' => 'string $binary_string',
            'arguments' => '$binary_string',
        ],
    'hexdec' =>
        [
            'signatureArguments' => 'string $hex_string',
            'arguments' => '$hex_string',
        ],
    'octdec' =>
        [
            'signatureArguments' => 'string $octal_string',
            'arguments' => '$octal_string',
        ],
    'decbin' =>
        [
            'signatureArguments' => 'int $num',
            'arguments' => '$num',
        ],
    'decoct' =>
        [
            'signatureArguments' => 'int $num',
            'arguments' => '$num',
        ],
    'dechex' =>
        [
            'signatureArguments' => 'int $num',
            'arguments' => '$num',
        ],
    'base_convert' =>
        [
            'signatureArguments' => 'string $num, int $from_base, int $to_base',
            'arguments' => '$num, $from_base, $to_base',
        ],
    'number_format' =>
        [
            'signatureArguments' => 'float $num, int $decimals = 0, ?string $decimal_separator = \'.\', ?string $thousands_separator = \',\'',
            'arguments' => '$num, $decimals, $decimal_separator, $thousands_separator',
        ],
    'fmod' =>
        [
            'signatureArguments' => 'float $num1, float $num2',
            'arguments' => '$num1, $num2',
        ],
    'fdiv' =>
        [
            'signatureArguments' => 'float $num1, float $num2',
            'arguments' => '$num1, $num2',
        ],
    'inet_ntop' =>
        [
            'signatureArguments' => 'string $ip',
            'arguments' => '$ip',
        ],
    'inet_pton' =>
        [
            'signatureArguments' => 'string $ip',
            'arguments' => '$ip',
        ],
    'ip2long' =>
        [
            'signatureArguments' => 'string $ip',
            'arguments' => '$ip',
        ],
    'long2ip' =>
        [
            'signatureArguments' => 'int $ip',
            'arguments' => '$ip',
        ],
    'putenv' =>
        [
            'signatureArguments' => 'string $assignment',
            'arguments' => '$assignment',
        ],
    'sys_getloadavg' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'microtime' =>
        [
            'signatureArguments' => 'bool $as_float = false',
            'arguments' => '$as_float',
        ],
    'gettimeofday' =>
        [
            'signatureArguments' => 'bool $as_float = false',
            'arguments' => '$as_float',
        ],
    'getrusage' =>
        [
            'signatureArguments' => 'int $mode = 0',
            'arguments' => '$mode',
        ],
    'uniqid' =>
        [
            'signatureArguments' => 'string $prefix = "", bool $more_entropy = false',
            'arguments' => '$prefix, $more_entropy',
        ],
    'quoted_printable_decode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'quoted_printable_encode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'convert_cyr_string' =>
        [
            'signatureArguments' => 'string $str, string $from, string $to',
            'arguments' => '$str, $from, $to',
        ],
    'get_current_user' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'set_time_limit' =>
        [
            'signatureArguments' => 'int $seconds',
            'arguments' => '$seconds',
        ],
    'get_cfg_var' =>
        [
            'signatureArguments' => 'string $option',
            'arguments' => '$option',
        ],
    'magic_quotes_runtime' =>
        [
            'signatureArguments' => 'bool $new_setting',
            'arguments' => '$new_setting',
        ],
    'set_magic_quotes_runtime' =>
        [
            'signatureArguments' => 'bool $new_setting',
            'arguments' => '$new_setting',
        ],
    'get_magic_quotes_gpc' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_magic_quotes_runtime' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'import_request_variables' =>
        [
            'signatureArguments' => 'string $types, $prefix = null',
            'arguments' => '$types, $prefix',
        ],
    'error_log' =>
        [
            'signatureArguments' => 'string $message, int $message_type = 0, ?string $destination, ?string $additional_headers',
            'arguments' => '$message, $message_type, $destination, $additional_headers',
        ],
    'get_browser' =>
        [
            'signatureArguments' => '?string $user_agent, bool $return_array = false',
            'arguments' => '$user_agent, $return_array',
        ],
    'crypt' =>
        [
            'signatureArguments' => 'string $string, string $salt',
            'arguments' => '$string, $salt',
        ],
    'opendir' =>
        [
            'signatureArguments' => 'string $directory, $context',
            'arguments' => '$directory, $context',
        ],
    'closedir' =>
        [
            'signatureArguments' => '$dir_handle',
            'arguments' => '$dir_handle',
        ],
    'chdir' =>
        [
            'signatureArguments' => 'string $directory',
            'arguments' => '$directory',
        ],
    'chroot' =>
        [
            'signatureArguments' => 'string $directory',
            'arguments' => '$directory',
        ],
    'getcwd' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'rewinddir' =>
        [
            'signatureArguments' => '$dir_handle',
            'arguments' => '$dir_handle',
        ],
    'readdir' =>
        [
            'signatureArguments' => '$dir_handle',
            'arguments' => '$dir_handle',
        ],
    'dir' =>
        [
            'signatureArguments' => 'string $directory, $context',
            'arguments' => '$directory, $context',
        ],
    'getdir' =>
        [
            'signatureArguments' => 'string $directory, $context = null',
            'arguments' => '$directory, $context',
        ],
    'scandir' =>
        [
            'signatureArguments' => 'string $directory, int $sorting_order = 0, $context',
            'arguments' => '$directory, $sorting_order, $context',
        ],
    'glob' =>
        [
            'signatureArguments' => 'string $pattern, int $flags = 0',
            'arguments' => '$pattern, $flags',
        ],
    'fileatime' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'filectime' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'filegroup' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'fileinode' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'filemtime' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'fileowner' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'fileperms' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'filesize' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'filetype' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'file_exists' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'is_writable' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'is_writeable' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'is_readable' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'is_executable' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'is_file' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'is_dir' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'is_link' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'stat' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'lstat' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'chown' =>
        [
            'signatureArguments' => 'string $filename, string|int $user',
            'arguments' => '$filename, $user',
        ],
    'chgrp' =>
        [
            'signatureArguments' => 'string $filename, string|int $group',
            'arguments' => '$filename, $group',
        ],
    'lchown' =>
        [
            'signatureArguments' => 'string $filename, string|int $user',
            'arguments' => '$filename, $user',
        ],
    'lchgrp' =>
        [
            'signatureArguments' => 'string $filename, string|int $group',
            'arguments' => '$filename, $group',
        ],
    'chmod' =>
        [
            'signatureArguments' => 'string $filename, int $permissions',
            'arguments' => '$filename, $permissions',
        ],
    'touch' =>
        [
            'signatureArguments' => 'string $filename, ?int $mtime, ?int $atime',
            'arguments' => '$filename, $mtime, $atime',
        ],
    'clearstatcache' =>
        [
            'signatureArguments' => 'bool $clear_realpath_cache = false, string $filename = \'\'',
            'arguments' => '$clear_realpath_cache, $filename',
        ],
    'disk_total_space' =>
        [
            'signatureArguments' => 'string $directory',
            'arguments' => '$directory',
        ],
    'disk_free_space' =>
        [
            'signatureArguments' => 'string $directory',
            'arguments' => '$directory',
        ],
    'diskfreespace' =>
        [
            'signatureArguments' => 'string $directory',
            'arguments' => '$directory',
        ],
    'mail' =>
        [
            'signatureArguments' => 'string $to, string $subject, string $message, array|string $additional_headers = [], string $additional_params = \'\'',
            'arguments' => '$to, $subject, $message, $additional_headers, $additional_params',
        ],
    'ezmlm_hash' =>
        [
            'signatureArguments' => 'string $addr',
            'arguments' => '$addr',
        ],
    'openlog' =>
        [
            'signatureArguments' => 'string $prefix, int $flags, int $facility',
            'arguments' => '$prefix, $flags, $facility',
        ],
    'stream_context_create' =>
        [
            'signatureArguments' => '?array $options, ?array $params',
            'arguments' => '$options, $params',
        ],
    'stream_context_set_params' =>
        [
            'signatureArguments' => '$context, array $params',
            'arguments' => '$context, $params',
        ],
    'stream_context_get_params' =>
        [
            'signatureArguments' => '$context',
            'arguments' => '$context',
        ],
    'stream_context_set_option' =>
        [
            'signatureArguments' => '$stream_or_context, array $options',
            'arguments' => '$stream_or_context, $options',
        ],
    'stream_context_get_options' =>
        [
            'signatureArguments' => '$stream_or_context',
            'arguments' => '$stream_or_context',
        ],
    'stream_context_get_default' =>
        [
            'signatureArguments' => '?array $options',
            'arguments' => '$options',
        ],
    'stream_context_set_default' =>
        [
            'signatureArguments' => 'array $options',
            'arguments' => '$options',
        ],
    'stream_filter_prepend' =>
        [
            'signatureArguments' => '$stream, string $filter_name, int $mode = 0, mixed $params',
            'arguments' => '$stream, $filter_name, $mode, $params',
        ],
    'stream_filter_append' =>
        [
            'signatureArguments' => '$stream, string $filter_name, int $mode = 0, mixed $params',
            'arguments' => '$stream, $filter_name, $mode, $params',
        ],
    'stream_filter_remove' =>
        [
            'signatureArguments' => '$stream_filter',
            'arguments' => '$stream_filter',
        ],
    'stream_socket_client' =>
        [
            'signatureArguments' => 'string $address, &$error_code, &$error_message, ?float $timeout, int $flags = STREAM_CLIENT_CONNECT, $context',
            'arguments' => '$address, $error_code, $error_message, $timeout, $flags, $context',
        ],
    'stream_socket_server' =>
        [
            'signatureArguments' => 'string $address, &$error_code, &$error_message, int $flags = STREAM_SERVER_BIND|STREAM_SERVER_LISTEN, $context',
            'arguments' => '$address, $error_code, $error_message, $flags, $context',
        ],
    'stream_socket_accept' =>
        [
            'signatureArguments' => '$socket, ?float $timeout, &$peer_name',
            'arguments' => '$socket, $timeout, $peer_name',
        ],
    'stream_socket_get_name' =>
        [
            'signatureArguments' => '$socket, bool $remote',
            'arguments' => '$socket, $remote',
        ],
    'stream_socket_recvfrom' =>
        [
            'signatureArguments' => '$socket, int $length, int $flags = 0, &$address',
            'arguments' => '$socket, $length, $flags, $address',
        ],
    'stream_socket_sendto' =>
        [
            'signatureArguments' => '$socket, string $data, int $flags = 0, string $address = \'\'',
            'arguments' => '$socket, $data, $flags, $address',
        ],
    'stream_socket_enable_crypto' =>
        [
            'signatureArguments' => '$stream, bool $enable, ?int $crypto_method, $session_stream',
            'arguments' => '$stream, $enable, $crypto_method, $session_stream',
        ],
    'stream_socket_shutdown' =>
        [
            'signatureArguments' => '$stream, int $mode',
            'arguments' => '$stream, $mode',
        ],
    'stream_socket_pair' =>
        [
            'signatureArguments' => 'int $domain, int $type, int $protocol',
            'arguments' => '$domain, $type, $protocol',
        ],
    'stream_copy_to_stream' =>
        [
            'signatureArguments' => '$from, $to, ?int $length, int $offset = 0',
            'arguments' => '$from, $to, $length, $offset',
        ],
    'stream_get_contents' =>
        [
            'signatureArguments' => '$stream, ?int $length = null, int $offset = -1',
            'arguments' => '$stream, $length, $offset',
        ],
    'stream_supports_lock' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'stream_context_set_options' =>
        [
            'signatureArguments' => '$context, array $options',
            'arguments' => '$context, $options',
        ],
    'fgetcsv' =>
        [
            'signatureArguments' => '$stream, ?int $length = null, string $separator = \',\', string $enclosure = \'"\', string $escape = \'\\\\\'',
            'arguments' => '$stream, $length, $separator, $enclosure, $escape',
        ],
    'flock' =>
        [
            'signatureArguments' => '$stream, int $operation, &$would_block',
            'arguments' => '$stream, $operation, $would_block',
        ],
    'get_meta_tags' =>
        [
            'signatureArguments' => 'string $filename, bool $use_include_path = false',
            'arguments' => '$filename, $use_include_path',
        ],
    'stream_set_write_buffer' =>
        [
            'signatureArguments' => '$stream, int $size',
            'arguments' => '$stream, $size',
        ],
    'stream_set_read_buffer' =>
        [
            'signatureArguments' => '$stream, int $size',
            'arguments' => '$stream, $size',
        ],
    'set_file_buffer' =>
        [
            'signatureArguments' => '$stream, int $size',
            'arguments' => '$stream, $size',
        ],
    'set_socket_blocking' =>
        [
            'signatureArguments' => '$socket, bool $mode',
            'arguments' => '$socket, $mode',
        ],
    'stream_set_blocking' =>
        [
            'signatureArguments' => '$stream, bool $enable',
            'arguments' => '$stream, $enable',
        ],
    'socket_set_blocking' =>
        [
            'signatureArguments' => '$stream, bool $enable',
            'arguments' => '$stream, $enable',
        ],
    'stream_get_meta_data' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'stream_get_line' =>
        [
            'signatureArguments' => '$stream, int $length, string $ending = \'\'',
            'arguments' => '$stream, $length, $ending',
        ],
    'stream_wrapper_register' =>
        [
            'signatureArguments' => 'string $protocol, string $class, int $flags = 0',
            'arguments' => '$protocol, $class, $flags',
        ],
    'stream_register_wrapper' =>
        [
            'signatureArguments' => 'string $protocol, string $class, int $flags = 0',
            'arguments' => '$protocol, $class, $flags',
        ],
    'stream_resolve_include_path' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'stream_wrapper_unregister' =>
        [
            'signatureArguments' => 'string $protocol',
            'arguments' => '$protocol',
        ],
    'stream_wrapper_restore' =>
        [
            'signatureArguments' => 'string $protocol',
            'arguments' => '$protocol',
        ],
    'stream_get_wrappers' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'stream_get_transports' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'stream_is_local' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'socket_get_status' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'realpath' =>
        [
            'signatureArguments' => 'string $path',
            'arguments' => '$path',
        ],
    'fnmatch' =>
        [
            'signatureArguments' => 'string $pattern, string $filename, int $flags = 0',
            'arguments' => '$pattern, $filename, $flags',
        ],
    'error_get_last' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'call_user_func' =>
        [
            'signatureArguments' => 'callable $callback, mixed ...$args',
            'arguments' => '$callback, $args',
        ],
    'call_user_func_array' =>
        [
            'signatureArguments' => 'callable $callback, array $args',
            'arguments' => '$callback, $args',
        ],
    'call_user_method' =>
        [
            'signatureArguments' => 'string $method_name, object &$obj, ...$parameter',
            'arguments' => '$method_name, $obj, $parameter',
        ],
    'call_user_method_array' =>
        [
            'signatureArguments' => 'string $method_name, object &$obj, array $params',
            'arguments' => '$method_name, $obj, $params',
        ],
    'forward_static_call' =>
        [
            'signatureArguments' => 'callable $callback, mixed ...$args',
            'arguments' => '$callback, $args',
        ],
    'forward_static_call_array' =>
        [
            'signatureArguments' => 'callable $callback, array $args',
            'arguments' => '$callback, $args',
        ],
    'serialize' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'unserialize' =>
        [
            'signatureArguments' => 'string $data, array $options = []',
            'arguments' => '$data, $options',
        ],
    'var_dump' =>
        [
            'signatureArguments' => '...$vars',
            'arguments' => '$vars',
        ],
    'var_export' =>
        [
            'signatureArguments' => 'mixed $value, bool $return = false',
            'arguments' => '$value, $return',
        ],
    'print_r' =>
        [
            'signatureArguments' => 'mixed $value, bool $return = false',
            'arguments' => '$value, $return',
        ],
    'memory_get_usage' =>
        [
            'signatureArguments' => 'bool $real_usage = false',
            'arguments' => '$real_usage',
        ],
    'memory_get_peak_usage' =>
        [
            'signatureArguments' => 'bool $real_usage = false',
            'arguments' => '$real_usage',
        ],
    'memory_reset_peak_usage' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'register_shutdown_function' =>
        [
            'signatureArguments' => 'callable $callback, mixed ...$args',
            'arguments' => '$callback, $args',
        ],
    'register_tick_function' =>
        [
            'signatureArguments' => 'callable $callback, mixed ...$args',
            'arguments' => '$callback, $args',
        ],
    'unregister_tick_function' =>
        [
            'signatureArguments' => 'callable $callback',
            'arguments' => '$callback',
        ],
    'highlight_file' =>
        [
            'signatureArguments' => 'string $filename, bool $return = false',
            'arguments' => '$filename, $return',
        ],
    'show_source' =>
        [
            'signatureArguments' => 'string $filename, bool $return = false',
            'arguments' => '$filename, $return',
        ],
    'highlight_string' =>
        [
            'signatureArguments' => 'string $string, bool $return = false',
            'arguments' => '$string, $return',
        ],
    'hrtime' =>
        [
            'signatureArguments' => 'bool $as_number = false',
            'arguments' => '$as_number',
        ],
    'php_strip_whitespace' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'ini_get' =>
        [
            'signatureArguments' => 'string $option',
            'arguments' => '$option',
        ],
    'ini_get_all' =>
        [
            'signatureArguments' => '?string $extension, bool $details = true',
            'arguments' => '$extension, $details',
        ],
    'ini_set' =>
        [
            'signatureArguments' => 'string $option, $value',
            'arguments' => '$option, $value',
        ],
    'ini_alter' =>
        [
            'signatureArguments' => 'string $option, $value',
            'arguments' => '$option, $value',
        ],
    'ini_restore' =>
        [
            'signatureArguments' => 'string $option',
            'arguments' => '$option',
        ],
    'ini_parse_quantity' =>
        [
            'signatureArguments' => 'string $shorthand',
            'arguments' => '$shorthand',
        ],
    'get_include_path' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'set_include_path' =>
        [
            'signatureArguments' => 'string $include_path',
            'arguments' => '$include_path',
        ],
    'restore_include_path' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'setcookie' =>
        [
            'signatureArguments' => 'string $name, string $value = \'\', array $options = []',
            'arguments' => '$name, $value, $options',
        ],
    'setrawcookie' =>
        [
            'signatureArguments' => 'string $name, $value = \'\', array $options = []',
            'arguments' => '$name, $value, $options',
        ],
    'header' =>
        [
            'signatureArguments' => 'string $header, bool $replace = true, int $response_code = 0',
            'arguments' => '$header, $replace, $response_code',
        ],
    'header_remove' =>
        [
            'signatureArguments' => '?string $name = null',
            'arguments' => '$name',
        ],
    'headers_sent' =>
        [
            'signatureArguments' => 'string &$filename = null, int &$line = null',
            'arguments' => '$filename, $line',
        ],
    'headers_list' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apache_request_headers' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'getallheaders' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'connection_aborted' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'connection_status' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ignore_user_abort' =>
        [
            'signatureArguments' => '?bool $enable',
            'arguments' => '$enable',
        ],
    'parse_ini_file' =>
        [
            'signatureArguments' => 'string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL',
            'arguments' => '$filename, $process_sections, $scanner_mode',
        ],
    'parse_ini_string' =>
        [
            'signatureArguments' => 'string $ini_string, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL',
            'arguments' => '$ini_string, $process_sections, $scanner_mode',
        ],
    'is_uploaded_file' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'move_uploaded_file' =>
        [
            'signatureArguments' => 'string $from, string $to',
            'arguments' => '$from, $to',
        ],
    'net_get_interfaces' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'gethostbyaddr' =>
        [
            'signatureArguments' => 'string $ip',
            'arguments' => '$ip',
        ],
    'gethostbyname' =>
        [
            'signatureArguments' => 'string $hostname',
            'arguments' => '$hostname',
        ],
    'gethostbynamel' =>
        [
            'signatureArguments' => 'string $hostname',
            'arguments' => '$hostname',
        ],
    'gethostname' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'dns_check_record' =>
        [
            'signatureArguments' => 'string $hostname, string $type = \'MX\'',
            'arguments' => '$hostname, $type',
        ],
    'checkdnsrr' =>
        [
            'signatureArguments' => 'string $hostname, string $type = \'MX\'',
            'arguments' => '$hostname, $type',
        ],
    'dns_get_mx' =>
        [
            'signatureArguments' => 'string $hostname, &$hosts, &$weights',
            'arguments' => '$hostname, $hosts, $weights',
        ],
    'getmxrr' =>
        [
            'signatureArguments' => 'string $hostname, &$hosts, &$weights',
            'arguments' => '$hostname, $hosts, $weights',
        ],
    'dns_get_record' =>
        [
            'signatureArguments' => 'string $hostname, int $type = DNS_ANY, &$authoritative_name_servers, &$additional_records, bool $raw = false',
            'arguments' => '$hostname, $type, $authoritative_name_servers, $additional_records, $raw',
        ],
    'boolval' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'intval' =>
        [
            'signatureArguments' => 'mixed $value, int $base = 10',
            'arguments' => '$value, $base',
        ],
    'floatval' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'doubleval' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'strval' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'gettype' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'settype' =>
        [
            'signatureArguments' => 'mixed &$var, string $type',
            'arguments' => '$var, $type',
        ],
    'is_null' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_resource' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_bool' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_long' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_float' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_int' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_integer' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_double' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_real' =>
        [
            'signatureArguments' => 'mixed $var',
            'arguments' => '$var',
        ],
    'is_numeric' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_string' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_array' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_object' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_scalar' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'is_callable' =>
        [
            'signatureArguments' => 'mixed $value, bool $syntax_only = false, &$callable_name',
            'arguments' => '$value, $syntax_only, $callable_name',
        ],
    'is_countable' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'pclose' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'popen' =>
        [
            'signatureArguments' => 'string $command, string $mode',
            'arguments' => '$command, $mode',
        ],
    'readfile' =>
        [
            'signatureArguments' => 'string $filename, bool $use_include_path = false, $context',
            'arguments' => '$filename, $use_include_path, $context',
        ],
    'rewind' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'rmdir' =>
        [
            'signatureArguments' => 'string $directory, $context',
            'arguments' => '$directory, $context',
        ],
    'umask' =>
        [
            'signatureArguments' => '?int $mask',
            'arguments' => '$mask',
        ],
    'fclose' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'feof' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'fgetc' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'fgets' =>
        [
            'signatureArguments' => '$stream, ?int $length',
            'arguments' => '$stream, $length',
        ],
    'fgetss' =>
        [
            'signatureArguments' => '$handle, ?int $length = null, $allowable_tags = null',
            'arguments' => '$handle, $length, $allowable_tags',
        ],
    'fread' =>
        [
            'signatureArguments' => '$stream, int $length',
            'arguments' => '$stream, $length',
        ],
    'fopen' =>
        [
            'signatureArguments' => 'string $filename, string $mode, bool $use_include_path = false, $context',
            'arguments' => '$filename, $mode, $use_include_path, $context',
        ],
    'fpassthru' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'ftruncate' =>
        [
            'signatureArguments' => '$stream, int $size',
            'arguments' => '$stream, $size',
        ],
    'fstat' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'fseek' =>
        [
            'signatureArguments' => '$stream, int $offset, int $whence = SEEK_SET',
            'arguments' => '$stream, $offset, $whence',
        ],
    'ftell' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'fflush' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'fsync' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'fdatasync' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'fwrite' =>
        [
            'signatureArguments' => '$stream, string $data, ?int $length',
            'arguments' => '$stream, $data, $length',
        ],
    'fputs' =>
        [
            'signatureArguments' => '$stream, string $data, ?int $length',
            'arguments' => '$stream, $data, $length',
        ],
    'mkdir' =>
        [
            'signatureArguments' => 'string $directory, int $permissions = 0777, bool $recursive = false, $context',
            'arguments' => '$directory, $permissions, $recursive, $context',
        ],
    'rename' =>
        [
            'signatureArguments' => 'string $from, string $to, $context',
            'arguments' => '$from, $to, $context',
        ],
    'copy' =>
        [
            'signatureArguments' => 'string $from, string $to, $context',
            'arguments' => '$from, $to, $context',
        ],
    'tempnam' =>
        [
            'signatureArguments' => 'string $directory, string $prefix',
            'arguments' => '$directory, $prefix',
        ],
    'tmpfile' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'file' =>
        [
            'signatureArguments' => 'string $filename, int $flags = 0, $context',
            'arguments' => '$filename, $flags, $context',
        ],
    'file_get_contents' =>
        [
            'signatureArguments' => 'string $filename, bool $use_include_path = false, $context, int $offset = 0, ?int $length',
            'arguments' => '$filename, $use_include_path, $context, $offset, $length',
        ],
    'file_put_contents' =>
        [
            'signatureArguments' => 'string $filename, mixed $data, int $flags = 0, $context',
            'arguments' => '$filename, $data, $flags, $context',
        ],
    'syslog' =>
        [
            'signatureArguments' => 'int $priority, string $message',
            'arguments' => '$priority, $message',
        ],
    'closelog' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'header_register_callback' =>
        [
            'signatureArguments' => 'callable $callback',
            'arguments' => '$callback',
        ],
    'getimagesizefromstring' =>
        [
            'signatureArguments' => 'string $string, &$image_info',
            'arguments' => '$string, $image_info',
        ],
    'stream_set_chunk_size' =>
        [
            'signatureArguments' => '$stream, int $size',
            'arguments' => '$stream, $size',
        ],
    'define_syslog_variables' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'metaphone' =>
        [
            'signatureArguments' => 'string $string, int $max_phonemes = 0',
            'arguments' => '$string, $max_phonemes',
        ],
    'ob_start' =>
        [
            'signatureArguments' => '$callback, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS',
            'arguments' => '$callback, $chunk_size, $flags',
        ],
    'ob_flush' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_clean' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_end_flush' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_end_clean' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_get_flush' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_get_clean' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_get_length' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_get_level' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_get_status' =>
        [
            'signatureArguments' => 'bool $full_status = false',
            'arguments' => '$full_status',
        ],
    'ob_get_contents' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ob_implicit_flush' =>
        [
            'signatureArguments' => '$enable = true',
            'arguments' => '$enable',
        ],
    'ob_list_handlers' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ksort' =>
        [
            'signatureArguments' => 'array &$array, int $flags = SORT_REGULAR',
            'arguments' => '$array, $flags',
        ],
    'krsort' =>
        [
            'signatureArguments' => 'array &$array, int $flags = SORT_REGULAR',
            'arguments' => '$array, $flags',
        ],
    'natsort' =>
        [
            'signatureArguments' => 'array &$array',
            'arguments' => '$array',
        ],
    'natcasesort' =>
        [
            'signatureArguments' => 'array &$array',
            'arguments' => '$array',
        ],
    'asort' =>
        [
            'signatureArguments' => 'array &$array, int $flags = SORT_REGULAR',
            'arguments' => '$array, $flags',
        ],
    'arsort' =>
        [
            'signatureArguments' => 'array &$array, int $flags = SORT_REGULAR',
            'arguments' => '$array, $flags',
        ],
    'sort' =>
        [
            'signatureArguments' => 'array &$array, int $flags = SORT_REGULAR',
            'arguments' => '$array, $flags',
        ],
    'rsort' =>
        [
            'signatureArguments' => 'array &$array, int $flags = SORT_REGULAR',
            'arguments' => '$array, $flags',
        ],
    'usort' =>
        [
            'signatureArguments' => 'array &$array, callable $callback',
            'arguments' => '$array, $callback',
        ],
    'uasort' =>
        [
            'signatureArguments' => 'array &$array, callable $callback',
            'arguments' => '$array, $callback',
        ],
    'uksort' =>
        [
            'signatureArguments' => 'array &$array, callable $callback',
            'arguments' => '$array, $callback',
        ],
    'shuffle' =>
        [
            'signatureArguments' => 'array &$array',
            'arguments' => '$array',
        ],
    'array_walk' =>
        [
            'signatureArguments' => 'object|array &$array, callable $callback, mixed $arg',
            'arguments' => '$array, $callback, $arg',
        ],
    'array_walk_recursive' =>
        [
            'signatureArguments' => 'object|array &$array, callable $callback, mixed $arg',
            'arguments' => '$array, $callback, $arg',
        ],
    'end' =>
        [
            'signatureArguments' => 'object|array &$array',
            'arguments' => '$array',
        ],
    'prev' =>
        [
            'signatureArguments' => 'object|array &$array',
            'arguments' => '$array',
        ],
    'next' =>
        [
            'signatureArguments' => 'object|array &$array',
            'arguments' => '$array',
        ],
    'reset' =>
        [
            'signatureArguments' => 'object|array &$array',
            'arguments' => '$array',
        ],
    'current' =>
        [
            'signatureArguments' => 'object|array $array',
            'arguments' => '$array',
        ],
    'key' =>
        [
            'signatureArguments' => 'object|array $array',
            'arguments' => '$array',
        ],
    'in_array' =>
        [
            'signatureArguments' => 'mixed $needle, array $haystack, bool $strict = false',
            'arguments' => '$needle, $haystack, $strict',
        ],
    'array_search' =>
        [
            'signatureArguments' => 'mixed $needle, array $haystack, bool $strict = false',
            'arguments' => '$needle, $haystack, $strict',
        ],
    'compact' =>
        [
            'signatureArguments' => '$var_names, ...$var_names',
            'arguments' => '$var_names, $var_names',
        ],
    'array_fill' =>
        [
            'signatureArguments' => 'int $start_index, int $count, mixed $value',
            'arguments' => '$start_index, $count, $value',
        ],
    'array_fill_keys' =>
        [
            'signatureArguments' => 'array $keys, mixed $value',
            'arguments' => '$keys, $value',
        ],
    'array_pop' =>
        [
            'signatureArguments' => 'array &$array',
            'arguments' => '$array',
        ],
    'array_shift' =>
        [
            'signatureArguments' => 'array &$array',
            'arguments' => '$array',
        ],
    'array_unshift' =>
        [
            'signatureArguments' => 'array &$array, $values, mixed ...$values',
            'arguments' => '$array, $values, $values',
        ],
    'array_splice' =>
        [
            'signatureArguments' => 'array &$array, int $offset, ?int $length, mixed $replacement = []',
            'arguments' => '$array, $offset, $length, $replacement',
        ],
    'array_slice' =>
        [
            'signatureArguments' => 'array $array, int $offset, ?int $length, bool $preserve_keys = false',
            'arguments' => '$array, $offset, $length, $preserve_keys',
        ],
    'array_keys' =>
        [
            'signatureArguments' => 'array $array, mixed $filter_value, bool $strict = false',
            'arguments' => '$array, $filter_value, $strict',
        ],
    'array_values' =>
        [
            'signatureArguments' => 'array $array',
            'arguments' => '$array',
        ],
    'array_count_values' =>
        [
            'signatureArguments' => 'array $array',
            'arguments' => '$array',
        ],
    'array_column' =>
        [
            'signatureArguments' => 'array $array, string|int|null $column_key, string|int|null $index_key = null',
            'arguments' => '$array, $column_key, $index_key',
        ],
    'array_reverse' =>
        [
            'signatureArguments' => 'array $array, bool $preserve_keys = false',
            'arguments' => '$array, $preserve_keys',
        ],
    'array_reduce' =>
        [
            'signatureArguments' => 'array $array, callable $callback, mixed $initial = null',
            'arguments' => '$array, $callback, $initial',
        ],
    'array_pad' =>
        [
            'signatureArguments' => 'array $array, int $length, mixed $value',
            'arguments' => '$array, $length, $value',
        ],
    'array_flip' =>
        [
            'signatureArguments' => 'array $array',
            'arguments' => '$array',
        ],
    'array_change_key_case' =>
        [
            'signatureArguments' => 'array $array, int $case = CASE_LOWER',
            'arguments' => '$array, $case',
        ],
    'array_rand' =>
        [
            'signatureArguments' => 'array $array, int $num = 1',
            'arguments' => '$array, $num',
        ],
    'array_unique' =>
        [
            'signatureArguments' => 'array $array, int $flags = SORT_STRING',
            'arguments' => '$array, $flags',
        ],
    'array_intersect' =>
        [
            'signatureArguments' => 'array $array, $arrays, array ...$arrays',
            'arguments' => '$array, $arrays, $arrays',
        ],
    'array_intersect_key' =>
        [
            'signatureArguments' => 'array $array, $arrays, array ...$arrays',
            'arguments' => '$array, $arrays, $arrays',
        ],
    'array_intersect_assoc' =>
        [
            'signatureArguments' => 'array $array, $arrays, array ...$arrays',
            'arguments' => '$array, $arrays, $arrays',
        ],
    'array_diff' =>
        [
            'signatureArguments' => 'array $array, $arrays, array ...$arrays',
            'arguments' => '$array, $arrays, $arrays',
        ],
    'array_diff_key' =>
        [
            'signatureArguments' => 'array $array, $arrays, array ...$arrays',
            'arguments' => '$array, $arrays, $arrays',
        ],
    'array_sum' =>
        [
            'signatureArguments' => 'array $array',
            'arguments' => '$array',
        ],
    'array_product' =>
        [
            'signatureArguments' => 'array $array',
            'arguments' => '$array',
        ],
    'array_filter' =>
        [
            'signatureArguments' => 'array $array, ?callable $callback, int $mode = 0',
            'arguments' => '$array, $callback, $mode',
        ],
    'array_chunk' =>
        [
            'signatureArguments' => 'array $array, int $length, bool $preserve_keys = false',
            'arguments' => '$array, $length, $preserve_keys',
        ],
    'array_combine' =>
        [
            'signatureArguments' => 'array $keys, array $values',
            'arguments' => '$keys, $values',
        ],
    'array_key_exists' =>
        [
            'signatureArguments' => '$key, $array',
            'arguments' => '$key, $array',
        ],
    'array_key_first' =>
        [
            'signatureArguments' => 'array $array',
            'arguments' => '$array',
        ],
    'array_key_last' =>
        [
            'signatureArguments' => 'array $array',
            'arguments' => '$array',
        ],
    'array_is_list' =>
        [
            'signatureArguments' => 'array $array',
            'arguments' => '$array',
        ],
    'pos' =>
        [
            'signatureArguments' => 'object|array $array',
            'arguments' => '$array',
        ],
    'sizeof' =>
        [
            'signatureArguments' => 'Countable|array $value, int $mode = COUNT_NORMAL',
            'arguments' => '$value, $mode',
        ],
    'key_exists' =>
        [
            'signatureArguments' => '$key, array $array',
            'arguments' => '$key, $array',
        ],
    'assert_options' =>
        [
            'signatureArguments' => 'int $option, mixed $value',
            'arguments' => '$option, $value',
        ],
    'ftok' =>
        [
            'signatureArguments' => 'string $filename, string $project_id',
            'arguments' => '$filename, $project_id',
        ],
    'str_rot13' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'stream_get_filters' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'stream_isatty' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'stream_filter_register' =>
        [
            'signatureArguments' => 'string $filter_name, string $class',
            'arguments' => '$filter_name, $class',
        ],
    'stream_bucket_make_writeable' =>
        [
            'signatureArguments' => '$brigade',
            'arguments' => '$brigade',
        ],
    'stream_bucket_prepend' =>
        [
            'signatureArguments' => '$brigade, object $bucket',
            'arguments' => '$brigade, $bucket',
        ],
    'stream_bucket_append' =>
        [
            'signatureArguments' => '$brigade, object $bucket',
            'arguments' => '$brigade, $bucket',
        ],
    'stream_bucket_new' =>
        [
            'signatureArguments' => '$stream, string $buffer',
            'arguments' => '$stream, $buffer',
        ],
    'output_add_rewrite_var' =>
        [
            'signatureArguments' => 'string $name, string $value',
            'arguments' => '$name, $value',
        ],
    'output_reset_rewrite_vars' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sys_get_temp_dir' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'realpath_cache_get' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'realpath_cache_size' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_mangled_object_vars' =>
        [
            'signatureArguments' => 'object $object',
            'arguments' => '$object',
        ],
    'get_debug_type' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'get_resource_id' =>
        [
            'signatureArguments' => '$resource',
            'arguments' => '$resource',
        ],
    'password_get_info' =>
        [
            'signatureArguments' => 'string $hash',
            'arguments' => '$hash',
        ],
    'password_hash' =>
        [
            'signatureArguments' => 'string $password, string|int|null $algo, array $options = []',
            'arguments' => '$password, $algo, $options',
        ],
    'password_needs_rehash' =>
        [
            'signatureArguments' => 'string $hash, string|int|null $algo, array $options = []',
            'arguments' => '$hash, $algo, $options',
        ],
    'password_verify' =>
        [
            'signatureArguments' => 'string $password, string $hash',
            'arguments' => '$password, $hash',
        ],
    'password_algos' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'dl' =>
        [
            'signatureArguments' => 'string $extension_filename',
            'arguments' => '$extension_filename',
        ],
    'cli_set_process_title' =>
        [
            'signatureArguments' => 'string $title',
            'arguments' => '$title',
        ],
    'cli_get_process_title' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'is_iterable' =>
        [
            'signatureArguments' => 'mixed $value',
            'arguments' => '$value',
        ],
    'utf8_encode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'utf8_decode' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'error_clear_last' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sapi_windows_cp_get' =>
        [
            'signatureArguments' => 'string $kind = ""',
            'arguments' => '$kind',
        ],
    'sapi_windows_cp_set' =>
        [
            'signatureArguments' => 'int $codepage',
            'arguments' => '$codepage',
        ],
    'sapi_windows_cp_conv' =>
        [
            'signatureArguments' => 'int|string $in_codepage, int|string $out_codepage, string $subject',
            'arguments' => '$in_codepage, $out_codepage, $subject',
        ],
    'sapi_windows_cp_is_utf8' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sapi_windows_vt100_support' =>
        [
            'signatureArguments' => '$stream, ?bool $enable = null',
            'arguments' => '$stream, $enable',
        ],
    'sapi_windows_set_ctrl_handler' =>
        [
            'signatureArguments' => '?callable $handler, bool $add = true',
            'arguments' => '$handler, $add',
        ],
    'sapi_windows_generate_ctrl_event' =>
        [
            'signatureArguments' => 'int $event, int $pid = 0',
            'arguments' => '$event, $pid',
        ],
    'rd_kafka_get_err_descs' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'rd_kafka_thread_cnt' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'rd_kafka_err2str' =>
        [
            'signatureArguments' => '$err',
            'arguments' => '$err',
        ],
    'rd_kafka_errno2err' =>
        [
            'signatureArguments' => '$errnox',
            'arguments' => '$errnox',
        ],
    'rd_kafka_errno' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'rd_kafka_offset_tail' =>
        [
            'signatureArguments' => '$cnt',
            'arguments' => '$cnt',
        ],
    'suhosin_encrypt_cookie' =>
        [
            'signatureArguments' => '$name, $value',
            'arguments' => '$name, $value',
        ],
    'suhosin_get_raw_cookies' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_unref' =>
        [
            'signatureArguments' => '$uv_t',
            'arguments' => '$uv_t',
        ],
    'uv_last_error' =>
        [
            'signatureArguments' => '$uv_loop = null',
            'arguments' => '$uv_loop',
        ],
    'uv_err_name' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'uv_strerror' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'uv_update_time' =>
        [
            'signatureArguments' => '$uv_loop',
            'arguments' => '$uv_loop',
        ],
    'uv_ref' =>
        [
            'signatureArguments' => '$uv_handle',
            'arguments' => '$uv_handle',
        ],
    'uv_run' =>
        [
            'signatureArguments' => '$uv_loop = null, $run_mode = UV::RUN_DEFAULT',
            'arguments' => '$uv_loop, $run_mode',
        ],
    'uv_run_once' =>
        [
            'signatureArguments' => '$uv_loop = null',
            'arguments' => '$uv_loop',
        ],
    'uv_loop_delete' =>
        [
            'signatureArguments' => '$uv_loop',
            'arguments' => '$uv_loop',
        ],
    'uv_now' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_tcp_bind' =>
        [
            'signatureArguments' => '$uv_tcp, $uv_sockaddr',
            'arguments' => '$uv_tcp, $uv_sockaddr',
        ],
    'uv_tcp_bind6' =>
        [
            'signatureArguments' => '$uv_tcp, $uv_sockaddr',
            'arguments' => '$uv_tcp, $uv_sockaddr',
        ],
    'uv_write' =>
        [
            'signatureArguments' => '$handle, string $data, callable $callback',
            'arguments' => '$handle, $data, $callback',
        ],
    'uv_write2' =>
        [
            'signatureArguments' => '$handle, string $data, $send, callable $callback',
            'arguments' => '$handle, $data, $send, $callback',
        ],
    'uv_tcp_nodelay' =>
        [
            'signatureArguments' => '$handle, bool $enable',
            'arguments' => '$handle, $enable',
        ],
    'uv_accept' =>
        [
            'signatureArguments' => '$server, $client',
            'arguments' => '$server, $client',
        ],
    'uv_shutdown' =>
        [
            'signatureArguments' => '$handle, callable $callback',
            'arguments' => '$handle, $callback',
        ],
    'uv_close' =>
        [
            'signatureArguments' => '$handle, callable $callback = null',
            'arguments' => '$handle, $callback',
        ],
    'uv_read_start' =>
        [
            'signatureArguments' => '$handle, callable $callback',
            'arguments' => '$handle, $callback',
        ],
    'uv_read2_start' =>
        [
            'signatureArguments' => '$handle, callable $callback',
            'arguments' => '$handle, $callback',
        ],
    'uv_read_stop' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_ip4_addr' =>
        [
            'signatureArguments' => 'string $ipv4_addr, int $port',
            'arguments' => '$ipv4_addr, $port',
        ],
    'uv_ip6_addr' =>
        [
            'signatureArguments' => 'string $ipv6_addr, int $port',
            'arguments' => '$ipv6_addr, $port',
        ],
    'uv_listen' =>
        [
            'signatureArguments' => '$handle, int $backlog, callable $callback',
            'arguments' => '$handle, $backlog, $callback',
        ],
    'uv_tcp_connect' =>
        [
            'signatureArguments' => '$handle, $ipv4_addr, callable $callback',
            'arguments' => '$handle, $ipv4_addr, $callback',
        ],
    'uv_tcp_connect6' =>
        [
            'signatureArguments' => '$handle, $ipv6_addr, callable $callback',
            'arguments' => '$handle, $ipv6_addr, $callback',
        ],
    'uv_timer_init' =>
        [
            'signatureArguments' => '$loop = null',
            'arguments' => '$loop',
        ],
    'uv_timer_start' =>
        [
            'signatureArguments' => '$timer, int $timeout, int $repeat, callable $callback',
            'arguments' => '$timer, $timeout, $repeat, $callback',
        ],
    'uv_timer_stop' =>
        [
            'signatureArguments' => '$timer',
            'arguments' => '$timer',
        ],
    'uv_timer_again' =>
        [
            'signatureArguments' => '$timer',
            'arguments' => '$timer',
        ],
    'uv_timer_set_repeat' =>
        [
            'signatureArguments' => '$timer, int $repeat',
            'arguments' => '$timer, $repeat',
        ],
    'uv_timer_get_repeat' =>
        [
            'signatureArguments' => '$timer',
            'arguments' => '$timer',
        ],
    'uv_idle_init' =>
        [
            'signatureArguments' => '$loop = null',
            'arguments' => '$loop',
        ],
    'uv_idle_start' =>
        [
            'signatureArguments' => '$idle, callable $callback',
            'arguments' => '$idle, $callback',
        ],
    'uv_idle_stop' =>
        [
            'signatureArguments' => '$idle',
            'arguments' => '$idle',
        ],
    'uv_getaddrinfo' =>
        [
            'signatureArguments' => '$loop, callable $callback, string $node, string $service, array $hints',
            'arguments' => '$loop, $callback, $node, $service, $hints',
        ],
    'uv_tcp_init' =>
        [
            'signatureArguments' => '$loop = null',
            'arguments' => '$loop',
        ],
    'uv_default_loop' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_loop_new' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_udp_init' =>
        [
            'signatureArguments' => '$loop = null',
            'arguments' => '$loop',
        ],
    'uv_udp_bind' =>
        [
            'signatureArguments' => '$resource, $address, int $flags',
            'arguments' => '$resource, $address, $flags',
        ],
    'uv_udp_bind6' =>
        [
            'signatureArguments' => '$resource, $address, int $flags',
            'arguments' => '$resource, $address, $flags',
        ],
    'uv_udp_recv_start' =>
        [
            'signatureArguments' => '$handle, callable $callback',
            'arguments' => '$handle, $callback',
        ],
    'uv_udp_recv_stop' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_udp_set_membership' =>
        [
            'signatureArguments' => '$handle, string $multicast_addr, string $interface_addr, int $membership',
            'arguments' => '$handle, $multicast_addr, $interface_addr, $membership',
        ],
    'uv_udp_set_multicast_loop' =>
        [
            'signatureArguments' => '$handle, int $enabled',
            'arguments' => '$handle, $enabled',
        ],
    'uv_udp_set_multicast_ttl' =>
        [
            'signatureArguments' => '$handle, int $ttl',
            'arguments' => '$handle, $ttl',
        ],
    'uv_udp_set_broadcast' =>
        [
            'signatureArguments' => '$handle, bool $enabled',
            'arguments' => '$handle, $enabled',
        ],
    'uv_udp_send' =>
        [
            'signatureArguments' => '$handle, string $data, $uv_addr, callable $callback',
            'arguments' => '$handle, $data, $uv_addr, $callback',
        ],
    'uv_udp_send6' =>
        [
            'signatureArguments' => '$handle, string $data, $uv_addr6, callable $callback',
            'arguments' => '$handle, $data, $uv_addr6, $callback',
        ],
    'uv_is_active' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_is_readable' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_is_writable' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_walk' =>
        [
            'signatureArguments' => '$loop, callable $closure, array $opaque = null',
            'arguments' => '$loop, $closure, $opaque',
        ],
    'uv_guess_handle' =>
        [
            'signatureArguments' => '$uv',
            'arguments' => '$uv',
        ],
    'uv_handle_type' =>
        [
            'signatureArguments' => '$uv',
            'arguments' => '$uv',
        ],
    'uv_pipe_init' =>
        [
            'signatureArguments' => '$loop, int $ipc',
            'arguments' => '$loop, $ipc',
        ],
    'uv_pipe_open' =>
        [
            'signatureArguments' => '$handle, int $pipe',
            'arguments' => '$handle, $pipe',
        ],
    'uv_pipe_bind' =>
        [
            'signatureArguments' => '$handle, string $name',
            'arguments' => '$handle, $name',
        ],
    'uv_pipe_connect' =>
        [
            'signatureArguments' => '$handle, string $path, callable $callback',
            'arguments' => '$handle, $path, $callback',
        ],
    'uv_pipe_pending_instances' =>
        [
            'signatureArguments' => '$handle, $count',
            'arguments' => '$handle, $count',
        ],
    'uv_ares_init_options' =>
        [
            'signatureArguments' => '$loop, array $options, int $optmask',
            'arguments' => '$loop, $options, $optmask',
        ],
    'ares_gethostbyname' =>
        [
            'signatureArguments' => '$handle, string $name, int $flag, callable $callback',
            'arguments' => '$handle, $name, $flag, $callback',
        ],
    'uv_loadavg' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_uptime' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_get_free_memory' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_get_total_memory' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_hrtime' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_exepath' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_cpu_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_interface_addresses' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_stdio_new' =>
        [
            'signatureArguments' => '$fd, int $flags',
            'arguments' => '$fd, $flags',
        ],
    'uv_spawn' =>
        [
            'signatureArguments' => '$loop, string $command, array $args, array $stdio, string $cwd, array $env = [], ?callable $callback = null, ?int $flags = null, ?array $options = null',
            'arguments' => '$loop, $command, $args, $stdio, $cwd, $env, $callback, $flags, $options',
        ],
    'uv_process_kill' =>
        [
            'signatureArguments' => '$handle, int $signal',
            'arguments' => '$handle, $signal',
        ],
    'uv_kill' =>
        [
            'signatureArguments' => 'int $pid, int $signal',
            'arguments' => '$pid, $signal',
        ],
    'uv_chdir' =>
        [
            'signatureArguments' => 'string $directory',
            'arguments' => '$directory',
        ],
    'uv_rwlock_init' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_rwlock_rdlock' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_rwlock_tryrdlock' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_rwlock_rdunlock' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_rwlock_wrlock' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_rwlock_trywrlock' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_rwlock_wrunlock' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_mutex_init' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_mutex_lock' =>
        [
            'signatureArguments' => '$lock',
            'arguments' => '$lock',
        ],
    'uv_mutex_trylock' =>
        [
            'signatureArguments' => '$lock',
            'arguments' => '$lock',
        ],
    'uv_sem_init' =>
        [
            'signatureArguments' => 'int $value',
            'arguments' => '$value',
        ],
    'uv_sem_post' =>
        [
            'signatureArguments' => '$sem',
            'arguments' => '$sem',
        ],
    'uv_sem_wait' =>
        [
            'signatureArguments' => '$sem',
            'arguments' => '$sem',
        ],
    'uv_sem_trywait' =>
        [
            'signatureArguments' => '$sem',
            'arguments' => '$sem',
        ],
    'uv_prepare_init' =>
        [
            'signatureArguments' => '$loop',
            'arguments' => '$loop',
        ],
    'uv_prepare_start' =>
        [
            'signatureArguments' => '$handle, callable $callback',
            'arguments' => '$handle, $callback',
        ],
    'uv_prepare_stop' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_check_init' =>
        [
            'signatureArguments' => '$loop',
            'arguments' => '$loop',
        ],
    'uv_check_start' =>
        [
            'signatureArguments' => '$handle, callable $callback',
            'arguments' => '$handle, $callback',
        ],
    'uv_check_stop' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_async_init' =>
        [
            'signatureArguments' => '$loop, callable $callback',
            'arguments' => '$loop, $callback',
        ],
    'uv_async_send' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'uv_queue_work' =>
        [
            'signatureArguments' => '$loop, callable $callback, callable $after_callback',
            'arguments' => '$loop, $callback, $after_callback',
        ],
    'uv_fs_open' =>
        [
            'signatureArguments' => '$loop, string $path, int $flag, int $mode, callable $callback',
            'arguments' => '$loop, $path, $flag, $mode, $callback',
        ],
    'uv_fs_read' =>
        [
            'signatureArguments' => '$loop, $fd, int $offset, int $length, callable $callback',
            'arguments' => '$loop, $fd, $offset, $length, $callback',
        ],
    'uv_fs_close' =>
        [
            'signatureArguments' => '$loop, $fd, callable $callback',
            'arguments' => '$loop, $fd, $callback',
        ],
    'uv_fs_write' =>
        [
            'signatureArguments' => '$loop, $fd, string $buffer, int $offset, callable $callback',
            'arguments' => '$loop, $fd, $buffer, $offset, $callback',
        ],
    'uv_fs_fsync' =>
        [
            'signatureArguments' => '$loop, $fd, callable $callback',
            'arguments' => '$loop, $fd, $callback',
        ],
    'uv_fs_fdatasync' =>
        [
            'signatureArguments' => '$loop, $fd, callable $callback',
            'arguments' => '$loop, $fd, $callback',
        ],
    'uv_fs_ftruncate' =>
        [
            'signatureArguments' => '$loop, $fd, int $offset, callable $callback',
            'arguments' => '$loop, $fd, $offset, $callback',
        ],
    'uv_fs_mkdir' =>
        [
            'signatureArguments' => '$loop, string $path, int $mode, callable $callback',
            'arguments' => '$loop, $path, $mode, $callback',
        ],
    'uv_fs_rmdir' =>
        [
            'signatureArguments' => '$loop, string $path, callable $callback',
            'arguments' => '$loop, $path, $callback',
        ],
    'uv_fs_unlink' =>
        [
            'signatureArguments' => '$loop, string $path, callable $callback',
            'arguments' => '$loop, $path, $callback',
        ],
    'uv_fs_rename' =>
        [
            'signatureArguments' => '$loop, string $from, string $to, callable $callback',
            'arguments' => '$loop, $from, $to, $callback',
        ],
    'uv_fs_utime' =>
        [
            'signatureArguments' => '$loop, string $path, int $utime, int $atime, callable $callback',
            'arguments' => '$loop, $path, $utime, $atime, $callback',
        ],
    'uv_fs_futime' =>
        [
            'signatureArguments' => '$loop, $fd, int $utime, int $atime, callable $callback',
            'arguments' => '$loop, $fd, $utime, $atime, $callback',
        ],
    'uv_fs_chmod' =>
        [
            'signatureArguments' => '$loop, string $path, int $mode, callable $callback',
            'arguments' => '$loop, $path, $mode, $callback',
        ],
    'uv_fs_fchmod' =>
        [
            'signatureArguments' => '$loop, $fd, int $mode, callable $callback',
            'arguments' => '$loop, $fd, $mode, $callback',
        ],
    'uv_fs_chown' =>
        [
            'signatureArguments' => '$loop, string $path, int $uid, int $gid, callable $callback',
            'arguments' => '$loop, $path, $uid, $gid, $callback',
        ],
    'uv_fs_fchown' =>
        [
            'signatureArguments' => '$loop, $fd, int $uid, int $gid, callable $callback',
            'arguments' => '$loop, $fd, $uid, $gid, $callback',
        ],
    'uv_fs_link' =>
        [
            'signatureArguments' => '$loop, string $from, string $to, callable $callback',
            'arguments' => '$loop, $from, $to, $callback',
        ],
    'uv_fs_symlink' =>
        [
            'signatureArguments' => '$loop, string $from, string $to, int $flags, callable $callback',
            'arguments' => '$loop, $from, $to, $flags, $callback',
        ],
    'uv_fs_readlink' =>
        [
            'signatureArguments' => '$loop, string $path, callable $callback',
            'arguments' => '$loop, $path, $callback',
        ],
    'uv_fs_stat' =>
        [
            'signatureArguments' => '$loop, string $path, callable $callback',
            'arguments' => '$loop, $path, $callback',
        ],
    'uv_fs_lstat' =>
        [
            'signatureArguments' => '$loop, string $path, callable $callback',
            'arguments' => '$loop, $path, $callback',
        ],
    'uv_fs_fstat' =>
        [
            'signatureArguments' => '$loop, $fd, callable $callback',
            'arguments' => '$loop, $fd, $callback',
        ],
    'uv_fs_readdir' =>
        [
            'signatureArguments' => '$loop, string $path, int $flags, callable $callback',
            'arguments' => '$loop, $path, $flags, $callback',
        ],
    'uv_fs_sendfile' =>
        [
            'signatureArguments' => '$loop, $in_fd, $out_fd, int $offset, int $length, callable $callback',
            'arguments' => '$loop, $in_fd, $out_fd, $offset, $length, $callback',
        ],
    'uv_fs_event_init' =>
        [
            'signatureArguments' => '$loop, string $path, callable $callback, int $flags = 0',
            'arguments' => '$loop, $path, $callback, $flags',
        ],
    'uv_tty_init' =>
        [
            'signatureArguments' => '$loop, $fd, int $readable',
            'arguments' => '$loop, $fd, $readable',
        ],
    'uv_tty_get_winsize' =>
        [
            'signatureArguments' => '$tty, int &$width, int &$height',
            'arguments' => '$tty, $width, $height',
        ],
    'uv_tty_set_mode' =>
        [
            'signatureArguments' => '$tty, int $mode',
            'arguments' => '$tty, $mode',
        ],
    'uv_tty_reset_mode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_tcp_getsockname' =>
        [
            'signatureArguments' => '$uv_sockaddr',
            'arguments' => '$uv_sockaddr',
        ],
    'uv_tcp_getpeername' =>
        [
            'signatureArguments' => '$uv_sockaddr',
            'arguments' => '$uv_sockaddr',
        ],
    'uv_udp_getsockname' =>
        [
            'signatureArguments' => '$uv_sockaddr',
            'arguments' => '$uv_sockaddr',
        ],
    'uv_resident_set_memory' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uv_ip4_name' =>
        [
            'signatureArguments' => '$address',
            'arguments' => '$address',
        ],
    'uv_ip6_name' =>
        [
            'signatureArguments' => '$address',
            'arguments' => '$address',
        ],
    'uv_poll_init' =>
        [
            'signatureArguments' => '$uv_loop, $fd',
            'arguments' => '$uv_loop, $fd',
        ],
    'uv_poll_start' =>
        [
            'signatureArguments' => '$handle, int $events, callable $callback',
            'arguments' => '$handle, $events, $callback',
        ],
    'uv_poll_stop' =>
        [
            'signatureArguments' => '$poll',
            'arguments' => '$poll',
        ],
    'uv_fs_poll_init' =>
        [
            'signatureArguments' => '$uv_loop = null',
            'arguments' => '$uv_loop',
        ],
    'uv_fs_poll_start' =>
        [
            'signatureArguments' => '$handle, $callback, string $path, int $interval',
            'arguments' => '$handle, $callback, $path, $interval',
        ],
    'uv_fs_poll_stop' =>
        [
            'signatureArguments' => '$poll',
            'arguments' => '$poll',
        ],
    'uv_stop' =>
        [
            'signatureArguments' => '$uv_loop',
            'arguments' => '$uv_loop',
        ],
    'uv_signal_stop' =>
        [
            'signatureArguments' => '$sig_handle',
            'arguments' => '$sig_handle',
        ],
    'memcache_connect' =>
        [
            'signatureArguments' => '$host, $port, $timeout = 1',
            'arguments' => '$host, $port, $timeout',
        ],
    'memcache_pconnect' =>
        [
            'signatureArguments' => '$host, $port = null, $timeout = 1',
            'arguments' => '$host, $port, $timeout',
        ],
    'memcache_add_server' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_set_server_params' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_set_failure_callback' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_get_server_status' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_get_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_add' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_set' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_replace' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_cas' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_append' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_prepend' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_get' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_delete' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_debug' =>
        [
            'signatureArguments' => '$on_off',
            'arguments' => '$on_off',
        ],
    'memcache_get_stats' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_get_extended_stats' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_set_compress_threshold' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_increment' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_decrement' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_close' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memcache_flush' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zip_open' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'zip_close' =>
        [
            'signatureArguments' => '$zip',
            'arguments' => '$zip',
        ],
    'zip_read' =>
        [
            'signatureArguments' => '$zip',
            'arguments' => '$zip',
        ],
    'zip_entry_open' =>
        [
            'signatureArguments' => '$zip_dp, $zip_entry, string $mode = \'rb\'',
            'arguments' => '$zip_dp, $zip_entry, $mode',
        ],
    'zip_entry_close' =>
        [
            'signatureArguments' => '$zip_entry',
            'arguments' => '$zip_entry',
        ],
    'zip_entry_read' =>
        [
            'signatureArguments' => '$zip_entry, int $len = 1024',
            'arguments' => '$zip_entry, $len',
        ],
    'zip_entry_filesize' =>
        [
            'signatureArguments' => '$zip_entry',
            'arguments' => '$zip_entry',
        ],
    'zip_entry_name' =>
        [
            'signatureArguments' => '$zip_entry',
            'arguments' => '$zip_entry',
        ],
    'zip_entry_compressedsize' =>
        [
            'signatureArguments' => '$zip_entry',
            'arguments' => '$zip_entry',
        ],
    'zip_entry_compressionmethod' =>
        [
            'signatureArguments' => '$zip_entry',
            'arguments' => '$zip_entry',
        ],
    'curl_init' =>
        [
            'signatureArguments' => '?string $url',
            'arguments' => '$url',
        ],
    'curl_copy_handle' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_version' =>
        [
            'signatureArguments' => '$age = null',
            'arguments' => '$age',
        ],
    'curl_setopt' =>
        [
            'signatureArguments' => '$handle, int $option, mixed $value',
            'arguments' => '$handle, $option, $value',
        ],
    'curl_setopt_array' =>
        [
            'signatureArguments' => '$handle, array $options',
            'arguments' => '$handle, $options',
        ],
    'curl_share_close' =>
        [
            'signatureArguments' => '$share_handle',
            'arguments' => '$share_handle',
        ],
    'curl_share_init' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'curl_share_setopt' =>
        [
            'signatureArguments' => '$share_handle, int $option, mixed $value',
            'arguments' => '$share_handle, $option, $value',
        ],
    'curl_strerror' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'curl_unescape' =>
        [
            'signatureArguments' => '$handle, string $string',
            'arguments' => '$handle, $string',
        ],
    'curl_exec' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_getinfo' =>
        [
            'signatureArguments' => '$handle, ?int $option',
            'arguments' => '$handle, $option',
        ],
    'curl_error' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_errno' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_escape' =>
        [
            'signatureArguments' => '$handle, string $string',
            'arguments' => '$handle, $string',
        ],
    'curl_file_create' =>
        [
            'signatureArguments' => 'string $filename, ?string $mime_type = null, ?string $posted_filename = null',
            'arguments' => '$filename, $mime_type, $posted_filename',
        ],
    'curl_close' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_multi_init' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'curl_multi_add_handle' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_multi_remove_handle' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_multi_select' =>
        [
            'signatureArguments' => '$multi_handle, float $timeout = 1.0',
            'arguments' => '$multi_handle, $timeout',
        ],
    'curl_multi_setopt' =>
        [
            'signatureArguments' => '$multi_handle, int $option, mixed $value',
            'arguments' => '$multi_handle, $option, $value',
        ],
    'curl_multi_strerror' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'curl_pause' =>
        [
            'signatureArguments' => '$handle, int $flags',
            'arguments' => '$handle, $flags',
        ],
    'curl_reset' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_multi_getcontent' =>
        [
            'signatureArguments' => '$handle',
            'arguments' => '$handle',
        ],
    'curl_multi_info_read' =>
        [
            'signatureArguments' => '$multi_handle, &$queued_messages',
            'arguments' => '$multi_handle, $queued_messages',
        ],
    'curl_multi_close' =>
        [
            'signatureArguments' => '$multi_handle',
            'arguments' => '$multi_handle',
        ],
    'curl_multi_errno' =>
        [
            'signatureArguments' => '$multi_handle',
            'arguments' => '$multi_handle',
        ],
    'curl_share_errno' =>
        [
            'signatureArguments' => '$share_handle',
            'arguments' => '$share_handle',
        ],
    'curl_share_strerror' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'curl_upkeep' =>
        [
            'signatureArguments' => 'CurlHandle $handle',
            'arguments' => '$handle',
        ],
    'enchant_broker_init' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'enchant_broker_free' =>
        [
            'signatureArguments' => '$broker',
            'arguments' => '$broker',
        ],
    'enchant_broker_get_error' =>
        [
            'signatureArguments' => '$broker',
            'arguments' => '$broker',
        ],
    'enchant_broker_set_dict_path' =>
        [
            'signatureArguments' => '$broker, int $dict_type, string $value',
            'arguments' => '$broker, $dict_type, $value',
        ],
    'enchant_broker_get_dict_path' =>
        [
            'signatureArguments' => '$broker, $dict_type',
            'arguments' => '$broker, $dict_type',
        ],
    'enchant_broker_list_dicts' =>
        [
            'signatureArguments' => '$broker',
            'arguments' => '$broker',
        ],
    'enchant_broker_request_dict' =>
        [
            'signatureArguments' => '$broker, $tag',
            'arguments' => '$broker, $tag',
        ],
    'enchant_broker_request_pwl_dict' =>
        [
            'signatureArguments' => '$broker, $filename',
            'arguments' => '$broker, $filename',
        ],
    'enchant_broker_free_dict' =>
        [
            'signatureArguments' => '$dict',
            'arguments' => '$dict',
        ],
    'enchant_broker_dict_exists' =>
        [
            'signatureArguments' => '$broker, $tag',
            'arguments' => '$broker, $tag',
        ],
    'enchant_broker_set_ordering' =>
        [
            'signatureArguments' => '$broker, $tag, $ordering',
            'arguments' => '$broker, $tag, $ordering',
        ],
    'enchant_broker_describe' =>
        [
            'signatureArguments' => '$broker',
            'arguments' => '$broker',
        ],
    'enchant_dict_check' =>
        [
            'signatureArguments' => '$dict, $word',
            'arguments' => '$dict, $word',
        ],
    'enchant_dict_suggest' =>
        [
            'signatureArguments' => '$dict, $word',
            'arguments' => '$dict, $word',
        ],
    'enchant_dict_add_to_personal' =>
        [
            'signatureArguments' => '$dict, $word',
            'arguments' => '$dict, $word',
        ],
    'enchant_dict_add_to_session' =>
        [
            'signatureArguments' => '$dict, $word',
            'arguments' => '$dict, $word',
        ],
    'enchant_dict_add' =>
        [
            'signatureArguments' => '$dictionary, $word',
            'arguments' => '$dictionary, $word',
        ],
    'enchant_dict_is_in_session' =>
        [
            'signatureArguments' => '$dict, $word',
            'arguments' => '$dict, $word',
        ],
    'enchant_dict_store_replacement' =>
        [
            'signatureArguments' => '$dict, $mis, $cor',
            'arguments' => '$dict, $mis, $cor',
        ],
    'enchant_dict_get_error' =>
        [
            'signatureArguments' => '$dict',
            'arguments' => '$dict',
        ],
    'enchant_dict_is_added' =>
        [
            'signatureArguments' => '$dictionary, $word',
            'arguments' => '$dictionary, $word',
        ],
    'enchant_dict_describe' =>
        [
            'signatureArguments' => '$dict',
            'arguments' => '$dict',
        ],
    'enchant_dict_quick_check' =>
        [
            'signatureArguments' => '$dict, $word, ?array &$suggestions = null',
            'arguments' => '$dict, $word, $suggestions',
        ],
    'json_encode' =>
        [
            'signatureArguments' => 'mixed $value, int $flags = 0, int $depth = 512',
            'arguments' => '$value, $flags, $depth',
        ],
    'json_decode' =>
        [
            'signatureArguments' => 'string $json, ?bool $associative = null, int $depth = 512, int $flags = 0',
            'arguments' => '$json, $associative, $depth, $flags',
        ],
    'json_last_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'json_last_error_msg' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'json_validate' =>
        [
            'signatureArguments' => 'string $json, int $depth = 512, int $flags = 0',
            'arguments' => '$json, $depth, $flags',
        ],
    'tidy_getopt' =>
        [
            'signatureArguments' => 'tidy $object, $option',
            'arguments' => '$object, $option',
        ],
    'tidy_parse_string' =>
        [
            'signatureArguments' => '$input, $config = null, $encoding = null',
            'arguments' => '$input, $config, $encoding',
        ],
    'tidy_parse_file' =>
        [
            'signatureArguments' => '$filename, $config = null, $encoding = null, $use_include_path = false',
            'arguments' => '$filename, $config, $encoding, $use_include_path',
        ],
    'tidy_get_output' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_get_error_buffer' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_clean_repair' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_repair_string' =>
        [
            'signatureArguments' => '$data, $config = null, $encoding = null',
            'arguments' => '$data, $config, $encoding',
        ],
    'tidy_repair_file' =>
        [
            'signatureArguments' => '$filename, $config = null, $encoding = null, $use_include_path = false',
            'arguments' => '$filename, $config, $encoding, $use_include_path',
        ],
    'tidy_diagnose' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_get_release' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'tidy_get_config' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_get_status' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_get_html_ver' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_is_xhtml' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_is_xml' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_error_count' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_warning_count' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_access_count' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_config_count' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_get_opt_doc' =>
        [
            'signatureArguments' => 'tidy $object, $optname',
            'arguments' => '$object, $optname',
        ],
    'tidy_get_root' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_get_head' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_get_html' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'tidy_get_body' =>
        [
            'signatureArguments' => 'tidy $object',
            'arguments' => '$object',
        ],
    'ob_tidyhandler' =>
        [
            'signatureArguments' => '$input, $mode = null',
            'arguments' => '$input, $mode',
        ],
    'finfo_open' =>
        [
            'signatureArguments' => 'int $flags = 0, ?string $magic_database = null',
            'arguments' => '$flags, $magic_database',
        ],
    'finfo_close' =>
        [
            'signatureArguments' => '$finfo',
            'arguments' => '$finfo',
        ],
    'finfo_set_flags' =>
        [
            'signatureArguments' => '$finfo, int $flags',
            'arguments' => '$finfo, $flags',
        ],
    'finfo_file' =>
        [
            'signatureArguments' => '$finfo, string $filename, int $flags = 0, $context',
            'arguments' => '$finfo, $filename, $flags, $context',
        ],
    'finfo_buffer' =>
        [
            'signatureArguments' => '$finfo, string $string, int $flags = FILEINFO_NONE, $context',
            'arguments' => '$finfo, $string, $flags, $context',
        ],
    'mime_content_type' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'oci_register_taf_callback' =>
        [
            'signatureArguments' => '$connection, $callbackFn',
            'arguments' => '$connection, $callbackFn',
        ],
    'oci_unregister_taf_callback' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'oci_define_by_name' =>
        [
            'signatureArguments' => '$statement, $column_name, &$variable, $type = SQLT_CHR',
            'arguments' => '$statement, $column_name, $variable, $type',
        ],
    'oci_bind_by_name' =>
        [
            'signatureArguments' => '$statement, $bv_name, &$variable, $maxlength = -1, $type = SQLT_CHR',
            'arguments' => '$statement, $bv_name, $variable, $maxlength, $type',
        ],
    'oci_bind_array_by_name' =>
        [
            'signatureArguments' => '$statement, $name, array &$var_array, $max_table_length, $max_item_length = -1, $type = SQLT_AFC',
            'arguments' => '$statement, $name, $var_array, $max_table_length, $max_item_length, $type',
        ],
    'oci_field_is_null' =>
        [
            'signatureArguments' => '$statement, $field',
            'arguments' => '$statement, $field',
        ],
    'oci_field_name' =>
        [
            'signatureArguments' => '$statement, $field',
            'arguments' => '$statement, $field',
        ],
    'oci_field_size' =>
        [
            'signatureArguments' => '$statement, $field',
            'arguments' => '$statement, $field',
        ],
    'oci_field_scale' =>
        [
            'signatureArguments' => '$statement, $field',
            'arguments' => '$statement, $field',
        ],
    'oci_field_precision' =>
        [
            'signatureArguments' => '$statement, $field',
            'arguments' => '$statement, $field',
        ],
    'oci_field_type' =>
        [
            'signatureArguments' => '$statement, $field',
            'arguments' => '$statement, $field',
        ],
    'oci_field_type_raw' =>
        [
            'signatureArguments' => '$statement, $field',
            'arguments' => '$statement, $field',
        ],
    'oci_execute' =>
        [
            'signatureArguments' => '$statement, $mode = OCI_COMMIT_ON_SUCCESS',
            'arguments' => '$statement, $mode',
        ],
    'oci_cancel' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_fetch' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_fetch_object' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_fetch_row' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_fetch_assoc' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_fetch_array' =>
        [
            'signatureArguments' => '$statement, $mode = null',
            'arguments' => '$statement, $mode',
        ],
    'ocifetchinto' =>
        [
            'signatureArguments' => '$statement_resource, &$result, $mode = null',
            'arguments' => '$statement_resource, $result, $mode',
        ],
    'oci_fetch_all' =>
        [
            'signatureArguments' => '$statement, array &$output, $skip = 0, $maxrows = -1, $flags = OCI_FETCHSTATEMENT_BY_COLUMN|OCI_ASSOC',
            'arguments' => '$statement, $output, $skip, $maxrows, $flags',
        ],
    'oci_free_statement' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_internal_debug' =>
        [
            'signatureArguments' => '$onoff',
            'arguments' => '$onoff',
        ],
    'oci_num_fields' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_parse' =>
        [
            'signatureArguments' => '$connection, $sql_text',
            'arguments' => '$connection, $sql_text',
        ],
    'oci_get_implicit_resultset' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_new_cursor' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'oci_result' =>
        [
            'signatureArguments' => '$statement, $field',
            'arguments' => '$statement, $field',
        ],
    'oci_client_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'oci_server_version' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'oci_statement_type' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_num_rows' =>
        [
            'signatureArguments' => '$statement',
            'arguments' => '$statement',
        ],
    'oci_close' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'oci_connect' =>
        [
            'signatureArguments' => '$username, $password, $connection_string = null, $character_set = null, $session_mode = null',
            'arguments' => '$username, $password, $connection_string, $character_set, $session_mode',
        ],
    'oci_new_connect' =>
        [
            'signatureArguments' => '$username, $password, $connection_string = null, $character_set = null, $session_mode = null',
            'arguments' => '$username, $password, $connection_string, $character_set, $session_mode',
        ],
    'oci_pconnect' =>
        [
            'signatureArguments' => '$username, $password, $connection_string = null, $character_set = null, $session_mode = null',
            'arguments' => '$username, $password, $connection_string, $character_set, $session_mode',
        ],
    'oci_error' =>
        [
            'signatureArguments' => '$resource = null',
            'arguments' => '$resource',
        ],
    'oci_free_descriptor' =>
        [
            'signatureArguments' => '$descriptor',
            'arguments' => '$descriptor',
        ],
    'oci_commit' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'oci_rollback' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'oci_new_descriptor' =>
        [
            'signatureArguments' => '$connection, $type = OCI_DTYPE_LOB',
            'arguments' => '$connection, $type',
        ],
    'oci_set_prefetch' =>
        [
            'signatureArguments' => '$statement, $rows',
            'arguments' => '$statement, $rows',
        ],
    'oci_set_client_identifier' =>
        [
            'signatureArguments' => '$connection, $client_identifier',
            'arguments' => '$connection, $client_identifier',
        ],
    'oci_set_edition' =>
        [
            'signatureArguments' => '$edition',
            'arguments' => '$edition',
        ],
    'oci_set_module_name' =>
        [
            'signatureArguments' => '$connection, $module_name',
            'arguments' => '$connection, $module_name',
        ],
    'oci_set_action' =>
        [
            'signatureArguments' => '$connection, $action_name',
            'arguments' => '$connection, $action_name',
        ],
    'oci_set_client_info' =>
        [
            'signatureArguments' => '$connection, $client_info',
            'arguments' => '$connection, $client_info',
        ],
    'oci_password_change' =>
        [
            'signatureArguments' => '$connection, $username, $old_password, $new_password',
            'arguments' => '$connection, $username, $old_password, $new_password',
        ],
    'oci_new_collection' =>
        [
            'signatureArguments' => '$connection, $tdo, $schema = null',
            'arguments' => '$connection, $tdo, $schema',
        ],
    'oci_free_cursor' =>
        [
            'signatureArguments' => '$statement_resource',
            'arguments' => '$statement_resource',
        ],
    'ocifreecursor' =>
        [
            'signatureArguments' => '$statement_resource',
            'arguments' => '$statement_resource',
        ],
    'ocibindbyname' =>
        [
            'signatureArguments' => '$statement, $column_name, &$variable, $maximum_length = -1, $type = SQLT_CHR',
            'arguments' => '$statement, $column_name, $variable, $maximum_length, $type',
        ],
    'ocidefinebyname' =>
        [
            'signatureArguments' => '$statement, $column_name, &$variable, $type = SQLT_CHR',
            'arguments' => '$statement, $column_name, $variable, $type',
        ],
    'ocicolumnisnull' =>
        [
            'signatureArguments' => '$statement, $column_number_or_name',
            'arguments' => '$statement, $column_number_or_name',
        ],
    'ocicolumnname' =>
        [
            'signatureArguments' => '$statement, $column_number',
            'arguments' => '$statement, $column_number',
        ],
    'ocicolumnsize' =>
        [
            'signatureArguments' => '$statement, $column_number_or_name',
            'arguments' => '$statement, $column_number_or_name',
        ],
    'ocicolumnscale' =>
        [
            'signatureArguments' => '$statement_resource, $column_number',
            'arguments' => '$statement_resource, $column_number',
        ],
    'ocicolumnprecision' =>
        [
            'signatureArguments' => '$statement_resource, $column_number',
            'arguments' => '$statement_resource, $column_number',
        ],
    'ocicolumntype' =>
        [
            'signatureArguments' => '$statement_resource, $column_number',
            'arguments' => '$statement_resource, $column_number',
        ],
    'ocicolumntyperaw' =>
        [
            'signatureArguments' => '$statement_resource, $column_number',
            'arguments' => '$statement_resource, $column_number',
        ],
    'ociexecute' =>
        [
            'signatureArguments' => '$statement_resource, $mode = OCI_COMMIT_ON_SUCCESS',
            'arguments' => '$statement_resource, $mode',
        ],
    'ocicancel' =>
        [
            'signatureArguments' => '$statement_resource',
            'arguments' => '$statement_resource',
        ],
    'ocifetch' =>
        [
            'signatureArguments' => '$statement_resource',
            'arguments' => '$statement_resource',
        ],
    'ocifetchstatement' =>
        [
            'signatureArguments' => '$statement_resource, &$output, $skip, $maximum_rows, $flags',
            'arguments' => '$statement_resource, $output, $skip, $maximum_rows, $flags',
        ],
    'ocifreestatement' =>
        [
            'signatureArguments' => '$statement_resource',
            'arguments' => '$statement_resource',
        ],
    'ociinternaldebug' =>
        [
            'signatureArguments' => '$mode',
            'arguments' => '$mode',
        ],
    'ocinumcols' =>
        [
            'signatureArguments' => '$statement_resource',
            'arguments' => '$statement_resource',
        ],
    'ociparse' =>
        [
            'signatureArguments' => '$connection_resource, $sql_text',
            'arguments' => '$connection_resource, $sql_text',
        ],
    'ocinewcursor' =>
        [
            'signatureArguments' => '$connection_resource',
            'arguments' => '$connection_resource',
        ],
    'ociresult' =>
        [
            'signatureArguments' => '$statement_resource, $column_number_or_name',
            'arguments' => '$statement_resource, $column_number_or_name',
        ],
    'ociserverversion' =>
        [
            'signatureArguments' => '$connection_resource',
            'arguments' => '$connection_resource',
        ],
    'ocistatementtype' =>
        [
            'signatureArguments' => '$statement_resource',
            'arguments' => '$statement_resource',
        ],
    'ocirowcount' =>
        [
            'signatureArguments' => '$statement_resource',
            'arguments' => '$statement_resource',
        ],
    'ocilogoff' =>
        [
            'signatureArguments' => '$connection_resource',
            'arguments' => '$connection_resource',
        ],
    'ocilogon' =>
        [
            'signatureArguments' => '$username, $password, $connection_string, $character_set, $session_mode',
            'arguments' => '$username, $password, $connection_string, $character_set, $session_mode',
        ],
    'ocinlogon' =>
        [
            'signatureArguments' => '$username, $password, $connection_string, $character_set, $session_mode',
            'arguments' => '$username, $password, $connection_string, $character_set, $session_mode',
        ],
    'ociplogon' =>
        [
            'signatureArguments' => '$username, $password, $connection_string, $character_set, $session_mode',
            'arguments' => '$username, $password, $connection_string, $character_set, $session_mode',
        ],
    'ocierror' =>
        [
            'signatureArguments' => '$connection_or_statement_resource',
            'arguments' => '$connection_or_statement_resource',
        ],
    'ocifreedesc' =>
        [
            'signatureArguments' => '$lob_descriptor',
            'arguments' => '$lob_descriptor',
        ],
    'ocisavelob' =>
        [
            'signatureArguments' => '$lob_descriptor, $data, $offset',
            'arguments' => '$lob_descriptor, $data, $offset',
        ],
    'ocisavelobfile' =>
        [
            'signatureArguments' => '$lob_descriptor, $filename',
            'arguments' => '$lob_descriptor, $filename',
        ],
    'ociloadlob' =>
        [
            'signatureArguments' => '$lob_descriptor',
            'arguments' => '$lob_descriptor',
        ],
    'ocicommit' =>
        [
            'signatureArguments' => '$connection_resource',
            'arguments' => '$connection_resource',
        ],
    'ocirollback' =>
        [
            'signatureArguments' => '$connection_resource',
            'arguments' => '$connection_resource',
        ],
    'ocinewdescriptor' =>
        [
            'signatureArguments' => '$connection_resource, $type = OCI_DTYPE_LOB',
            'arguments' => '$connection_resource, $type',
        ],
    'ocisetprefetch' =>
        [
            'signatureArguments' => '$statement_resource, $number_of_rows',
            'arguments' => '$statement_resource, $number_of_rows',
        ],
    'ocipasswordchange' =>
        [
            'signatureArguments' => '$connection_resource_or_connection_string_or_dbname, $username, $old_password, $new_password',
            'arguments' => '$connection_resource_or_connection_string_or_dbname, $username, $old_password, $new_password',
        ],
    'ocifreecollection' =>
        [
            'signatureArguments' => '$collection',
            'arguments' => '$collection',
        ],
    'ocinewcollection' =>
        [
            'signatureArguments' => '$connection_resource, $tdo, $schema = null',
            'arguments' => '$connection_resource, $tdo, $schema',
        ],
    'ocicollappend' =>
        [
            'signatureArguments' => '$collection, $value',
            'arguments' => '$collection, $value',
        ],
    'ocicollgetelem' =>
        [
            'signatureArguments' => '$collection, $index',
            'arguments' => '$collection, $index',
        ],
    'ocicollassignelem' =>
        [
            'signatureArguments' => '$collection, $index, $value',
            'arguments' => '$collection, $index, $value',
        ],
    'ocicollsize' =>
        [
            'signatureArguments' => '$collection',
            'arguments' => '$collection',
        ],
    'ocicollmax' =>
        [
            'signatureArguments' => '$collection',
            'arguments' => '$collection',
        ],
    'ocicolltrim' =>
        [
            'signatureArguments' => '$collection, $number',
            'arguments' => '$collection, $number',
        ],
    'ocicloselob' =>
        [
            'signatureArguments' => '$lob_descriptor',
            'arguments' => '$lob_descriptor',
        ],
    'oci_set_call_timeout' =>
        [
            'signatureArguments' => '$connection, int $time_out',
            'arguments' => '$connection, $time_out',
        ],
    'oci_set_db_operation' =>
        [
            'signatureArguments' => '$connection, string $dbop',
            'arguments' => '$connection, $dbop',
        ],
    'oci_set_prefetch_lob' =>
        [
            'signatureArguments' => '$statement, int $prefetch_lob_size',
            'arguments' => '$statement, $prefetch_lob_size',
        ],
    'snappy_compress' =>
        [
            'signatureArguments' => 'string $data',
            'arguments' => '$data',
        ],
    'snappy_uncompress' =>
        [
            'signatureArguments' => 'string $data',
            'arguments' => '$data',
        ],
    'http_date' =>
        [
            'signatureArguments' => '$timestamp = null',
            'arguments' => '$timestamp',
        ],
    'http_build_url' =>
        [
            'signatureArguments' => '$url = null, $parts = null, $flags = null, ?array &$new_url = null',
            'arguments' => '$url, $parts, $flags, $new_url',
        ],
    'http_build_str' =>
        [
            'signatureArguments' => 'array $query, $prefix = null, $arg_separator = null',
            'arguments' => '$query, $prefix, $arg_separator',
        ],
    'http_negotiate_language' =>
        [
            'signatureArguments' => 'array $supported, ?array &$result = null',
            'arguments' => '$supported, $result',
        ],
    'http_negotiate_charset' =>
        [
            'signatureArguments' => 'array $supported, ?array &$result = null',
            'arguments' => '$supported, $result',
        ],
    'http_negotiate_content_type' =>
        [
            'signatureArguments' => 'array $supported, ?array &$result = null',
            'arguments' => '$supported, $result',
        ],
    'http_redirect' =>
        [
            'signatureArguments' => '$url = null, ?array $params = null, $session = null, $status = null',
            'arguments' => '$url, $params, $session, $status',
        ],
    'http_throttle' =>
        [
            'signatureArguments' => '$sec = null, $bytes = null',
            'arguments' => '$sec, $bytes',
        ],
    'http_send_status' =>
        [
            'signatureArguments' => '$status',
            'arguments' => '$status',
        ],
    'http_send_last_modified' =>
        [
            'signatureArguments' => '$timestamp = null',
            'arguments' => '$timestamp',
        ],
    'http_send_content_type' =>
        [
            'signatureArguments' => '$content_type = null',
            'arguments' => '$content_type',
        ],
    'http_send_content_disposition' =>
        [
            'signatureArguments' => '$filename, $inline = null',
            'arguments' => '$filename, $inline',
        ],
    'http_match_modified' =>
        [
            'signatureArguments' => '$timestamp = null, $for_range = null',
            'arguments' => '$timestamp, $for_range',
        ],
    'http_match_etag' =>
        [
            'signatureArguments' => '$etag, $for_range = null',
            'arguments' => '$etag, $for_range',
        ],
    'http_cache_last_modified' =>
        [
            'signatureArguments' => '$timestamp_or_expires = null',
            'arguments' => '$timestamp_or_expires',
        ],
    'http_cache_etag' =>
        [
            'signatureArguments' => '$etag = null',
            'arguments' => '$etag',
        ],
    'http_send_data' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'http_send_file' =>
        [
            'signatureArguments' => '$file',
            'arguments' => '$file',
        ],
    'http_send_stream' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'http_chunked_decode' =>
        [
            'signatureArguments' => '$encoded',
            'arguments' => '$encoded',
        ],
    'http_parse_message' =>
        [
            'signatureArguments' => '$message',
            'arguments' => '$message',
        ],
    'http_parse_headers' =>
        [
            'signatureArguments' => '$header',
            'arguments' => '$header',
        ],
    'http_parse_cookie' =>
        [
            'signatureArguments' => '$cookie, $flags = null, ?array $allowed_extras = null',
            'arguments' => '$cookie, $flags, $allowed_extras',
        ],
    'http_build_cookie' =>
        [
            'signatureArguments' => 'array $cookie',
            'arguments' => '$cookie',
        ],
    'http_parse_params' =>
        [
            'signatureArguments' => '$param, $flags = null',
            'arguments' => '$param, $flags',
        ],
    'http_get_request_headers' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'http_get_request_body' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'http_get_request_body_stream' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'http_match_request_header' =>
        [
            'signatureArguments' => '$header, $value, $match_case = null',
            'arguments' => '$header, $value, $match_case',
        ],
    'http_persistent_handles_count' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'http_persistent_handles_clean' =>
        [
            'signatureArguments' => '$ident = null',
            'arguments' => '$ident',
        ],
    'http_persistent_handles_ident' =>
        [
            'signatureArguments' => '$ident',
            'arguments' => '$ident',
        ],
    'http_get' =>
        [
            'signatureArguments' => '$url, ?array $options = null, ?array &$info = null',
            'arguments' => '$url, $options, $info',
        ],
    'http_head' =>
        [
            'signatureArguments' => '$url = null, ?array $options = null, ?array &$info = null',
            'arguments' => '$url, $options, $info',
        ],
    'http_post_data' =>
        [
            'signatureArguments' => '$url, $data = null, ?array $options = null, ?array &$info = null',
            'arguments' => '$url, $data, $options, $info',
        ],
    'http_post_fields' =>
        [
            'signatureArguments' => '$url, ?array $data = null, ?array $files = null, ?array $options = null, ?array &$info = null',
            'arguments' => '$url, $data, $files, $options, $info',
        ],
    'http_put_data' =>
        [
            'signatureArguments' => '$url, $data = null, ?array $options = null, ?array &$info = null',
            'arguments' => '$url, $data, $options, $info',
        ],
    'http_put_file' =>
        [
            'signatureArguments' => '$url, $file = null, ?array $options = null, ?array &$info = null',
            'arguments' => '$url, $file, $options, $info',
        ],
    'http_put_stream' =>
        [
            'signatureArguments' => '$url, $stream = null, ?array $options = null, ?array &$info = null',
            'arguments' => '$url, $stream, $options, $info',
        ],
    'http_request' =>
        [
            'signatureArguments' => '$method, $url = null, $body = null, ?array $options = null, ?array &$info = null',
            'arguments' => '$method, $url, $body, $options, $info',
        ],
    'http_request_body_encode' =>
        [
            'signatureArguments' => 'array $fields, array $files',
            'arguments' => '$fields, $files',
        ],
    'http_request_method_register' =>
        [
            'signatureArguments' => '$method',
            'arguments' => '$method',
        ],
    'http_request_method_unregister' =>
        [
            'signatureArguments' => '$method',
            'arguments' => '$method',
        ],
    'http_request_method_exists' =>
        [
            'signatureArguments' => '$method',
            'arguments' => '$method',
        ],
    'http_request_method_name' =>
        [
            'signatureArguments' => '$method',
            'arguments' => '$method',
        ],
    'ob_etaghandler' =>
        [
            'signatureArguments' => '$data, $mode',
            'arguments' => '$data, $mode',
        ],
    'http_deflate' =>
        [
            'signatureArguments' => '$data, $flags = null',
            'arguments' => '$data, $flags',
        ],
    'http_inflate' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'ob_deflatehandler' =>
        [
            'signatureArguments' => '$data, $mode',
            'arguments' => '$data, $mode',
        ],
    'ob_inflatehandler' =>
        [
            'signatureArguments' => '$data, $mode',
            'arguments' => '$data, $mode',
        ],
    'http_support' =>
        [
            'signatureArguments' => '$feature = null',
            'arguments' => '$feature',
        ],
    'odbc_autocommit' =>
        [
            'signatureArguments' => '$connection_id, $OnOff = false',
            'arguments' => '$connection_id, $OnOff',
        ],
    'odbc_binmode' =>
        [
            'signatureArguments' => '$result_id, $mode',
            'arguments' => '$result_id, $mode',
        ],
    'odbc_close' =>
        [
            'signatureArguments' => '$connection_id',
            'arguments' => '$connection_id',
        ],
    'odbc_close_all' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'odbc_columns' =>
        [
            'signatureArguments' => '$connection_id, $qualifier = null, $schema = null, $table_name = null, $column_name = null',
            'arguments' => '$connection_id, $qualifier, $schema, $table_name, $column_name',
        ],
    'odbc_commit' =>
        [
            'signatureArguments' => '$connection_id',
            'arguments' => '$connection_id',
        ],
    'odbc_connect' =>
        [
            'signatureArguments' => '$dsn, $user, $password, $cursor_option = SQL_CUR_USE_DRIVER',
            'arguments' => '$dsn, $user, $password, $cursor_option',
        ],
    'odbc_cursor' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'odbc_data_source' =>
        [
            'signatureArguments' => '$connection_id, $fetch_type',
            'arguments' => '$connection_id, $fetch_type',
        ],
    'odbc_execute' =>
        [
            'signatureArguments' => '$statement, array $params = []',
            'arguments' => '$statement, $params',
        ],
    'odbc_error' =>
        [
            'signatureArguments' => '$connection_id = null',
            'arguments' => '$connection_id',
        ],
    'odbc_errormsg' =>
        [
            'signatureArguments' => '$connection_id = null',
            'arguments' => '$connection_id',
        ],
    'odbc_exec' =>
        [
            'signatureArguments' => '$connection_id, $query_string, $flags = null',
            'arguments' => '$connection_id, $query_string, $flags',
        ],
    'odbc_fetch_array' =>
        [
            'signatureArguments' => '$statement, $row = -1',
            'arguments' => '$statement, $row',
        ],
    'odbc_fetch_object' =>
        [
            'signatureArguments' => '$statement, $row = -1',
            'arguments' => '$statement, $row',
        ],
    'odbc_fetch_row' =>
        [
            'signatureArguments' => '$result_id, $row_number = null',
            'arguments' => '$result_id, $row_number',
        ],
    'odbc_fetch_into' =>
        [
            'signatureArguments' => '$statement, array &$array, $row = 0',
            'arguments' => '$statement, $array, $row',
        ],
    'odbc_field_len' =>
        [
            'signatureArguments' => '$result_id, $field_number',
            'arguments' => '$result_id, $field_number',
        ],
    'odbc_field_scale' =>
        [
            'signatureArguments' => '$result_id, $field_number',
            'arguments' => '$result_id, $field_number',
        ],
    'odbc_field_name' =>
        [
            'signatureArguments' => '$result_id, $field_number',
            'arguments' => '$result_id, $field_number',
        ],
    'odbc_field_type' =>
        [
            'signatureArguments' => '$result_id, $field_number',
            'arguments' => '$result_id, $field_number',
        ],
    'odbc_field_num' =>
        [
            'signatureArguments' => '$result_id, $field_name',
            'arguments' => '$result_id, $field_name',
        ],
    'odbc_free_result' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'odbc_gettypeinfo' =>
        [
            'signatureArguments' => '$odbc, $data_type = 0',
            'arguments' => '$odbc, $data_type',
        ],
    'odbc_longreadlen' =>
        [
            'signatureArguments' => '$result_id, $length',
            'arguments' => '$result_id, $length',
        ],
    'odbc_next_result' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'odbc_num_fields' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'odbc_num_rows' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'odbc_pconnect' =>
        [
            'signatureArguments' => '$dsn, $user, $password, $cursor_option = SQL_CUR_USE_DRIVER',
            'arguments' => '$dsn, $user, $password, $cursor_option',
        ],
    'odbc_prepare' =>
        [
            'signatureArguments' => '$connection_id, $query_string',
            'arguments' => '$connection_id, $query_string',
        ],
    'odbc_result' =>
        [
            'signatureArguments' => '$result_id, $field',
            'arguments' => '$result_id, $field',
        ],
    'odbc_result_all' =>
        [
            'signatureArguments' => '$statement, $format = \'\'',
            'arguments' => '$statement, $format',
        ],
    'odbc_rollback' =>
        [
            'signatureArguments' => '$connection_id',
            'arguments' => '$connection_id',
        ],
    'odbc_setoption' =>
        [
            'signatureArguments' => '$id, $function, $option, $param',
            'arguments' => '$id, $function, $option, $param',
        ],
    'odbc_specialcolumns' =>
        [
            'signatureArguments' => '$connection_id, $type, $qualifier, $owner, $table, $scope, $nullable',
            'arguments' => '$connection_id, $type, $qualifier, $owner, $table, $scope, $nullable',
        ],
    'odbc_statistics' =>
        [
            'signatureArguments' => '$connection_id, $qualifier, $owner, $table_name, $unique, $accuracy',
            'arguments' => '$connection_id, $qualifier, $owner, $table_name, $unique, $accuracy',
        ],
    'odbc_tables' =>
        [
            'signatureArguments' => '$connection_id, $qualifier = null, $owner = null, $name = null, $types = null',
            'arguments' => '$connection_id, $qualifier, $owner, $name, $types',
        ],
    'odbc_primarykeys' =>
        [
            'signatureArguments' => '$connection_id, $qualifier, $owner, $table',
            'arguments' => '$connection_id, $qualifier, $owner, $table',
        ],
    'odbc_columnprivileges' =>
        [
            'signatureArguments' => '$connection_id, $qualifier, $owner, $table_name, $column_name',
            'arguments' => '$connection_id, $qualifier, $owner, $table_name, $column_name',
        ],
    'odbc_tableprivileges' =>
        [
            'signatureArguments' => '$connection_id, $qualifier, $owner, $name',
            'arguments' => '$connection_id, $qualifier, $owner, $name',
        ],
    'odbc_foreignkeys' =>
        [
            'signatureArguments' => '$connection_id, $pk_qualifier, $pk_owner, $pk_table, $fk_qualifier, $fk_owner, $fk_table',
            'arguments' => '$connection_id, $pk_qualifier, $pk_owner, $pk_table, $fk_qualifier, $fk_owner, $fk_table',
        ],
    'odbc_procedures' =>
        [
            'signatureArguments' => '$odbc, $catalog = null, $schema = null, $procedure = null',
            'arguments' => '$odbc, $catalog, $schema, $procedure',
        ],
    'odbc_procedurecolumns' =>
        [
            'signatureArguments' => '$odbc, $catalog = null, $schema = null, $procedure = null, $column = null',
            'arguments' => '$odbc, $catalog, $schema, $procedure, $column',
        ],
    'odbc_do' =>
        [
            'signatureArguments' => '$connection_id, $query, $flags',
            'arguments' => '$connection_id, $query, $flags',
        ],
    'odbc_field_precision' =>
        [
            'signatureArguments' => '$result_id, $field_number',
            'arguments' => '$result_id, $field_number',
        ],
    'textdomain' =>
        [
            'signatureArguments' => '?string $domain',
            'arguments' => '$domain',
        ],
    '_' =>
        [
            'signatureArguments' => 'string $message',
            'arguments' => '$message',
        ],
    'gettext' =>
        [
            'signatureArguments' => 'string $message',
            'arguments' => '$message',
        ],
    'dgettext' =>
        [
            'signatureArguments' => 'string $domain, string $message',
            'arguments' => '$domain, $message',
        ],
    'dcgettext' =>
        [
            'signatureArguments' => 'string $domain, string $message, int $category',
            'arguments' => '$domain, $message, $category',
        ],
    'bindtextdomain' =>
        [
            'signatureArguments' => 'string $domain, $directory',
            'arguments' => '$domain, $directory',
        ],
    'ngettext' =>
        [
            'signatureArguments' => 'string $singular, string $plural, int $count',
            'arguments' => '$singular, $plural, $count',
        ],
    'dngettext' =>
        [
            'signatureArguments' => 'string $domain, string $singular, string $plural, int $count',
            'arguments' => '$domain, $singular, $plural, $count',
        ],
    'dcngettext' =>
        [
            'signatureArguments' => 'string $domain, string $singular, string $plural, int $count, int $category',
            'arguments' => '$domain, $singular, $plural, $count, $category',
        ],
    'bind_textdomain_codeset' =>
        [
            'signatureArguments' => 'string $domain, $codeset',
            'arguments' => '$domain, $codeset',
        ],
    'stomp_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'stomp_connect' =>
        [
            'signatureArguments' => '$broker = null, $username = null, $password = null, array $headers = []',
            'arguments' => '$broker, $username, $password, $headers',
        ],
    'stomp_get_session_id' =>
        [
            'signatureArguments' => '$link',
            'arguments' => '$link',
        ],
    'stomp_close' =>
        [
            'signatureArguments' => '$link',
            'arguments' => '$link',
        ],
    'stomp_send' =>
        [
            'signatureArguments' => '$link, $destination, $msg, array $headers = []',
            'arguments' => '$link, $destination, $msg, $headers',
        ],
    'stomp_subscribe' =>
        [
            'signatureArguments' => '$link, $destination, array $headers = []',
            'arguments' => '$link, $destination, $headers',
        ],
    'stomp_unsubscribe' =>
        [
            'signatureArguments' => '$link, $destination, array $headers = []',
            'arguments' => '$link, $destination, $headers',
        ],
    'stomp_has_frame' =>
        [
            'signatureArguments' => '$link',
            'arguments' => '$link',
        ],
    'stomp_read_frame' =>
        [
            'signatureArguments' => '$link',
            'arguments' => '$link',
        ],
    'stomp_begin' =>
        [
            'signatureArguments' => '$link, $transaction_id',
            'arguments' => '$link, $transaction_id',
        ],
    'stomp_commit' =>
        [
            'signatureArguments' => '$link, $transaction_id',
            'arguments' => '$link, $transaction_id',
        ],
    'stomp_abort' =>
        [
            'signatureArguments' => '$link, $transaction_id',
            'arguments' => '$link, $transaction_id',
        ],
    'stomp_ack' =>
        [
            'signatureArguments' => '$link, $msg, array $headers = []',
            'arguments' => '$link, $msg, $headers',
        ],
    'stomp_error' =>
        [
            'signatureArguments' => '$link',
            'arguments' => '$link',
        ],
    'stomp_set_timeout' =>
        [
            'signatureArguments' => '$link, $seconds, $microseconds = 0',
            'arguments' => '$link, $seconds, $microseconds',
        ],
    'stomp_get_timeout' =>
        [
            'signatureArguments' => '$link',
            'arguments' => '$link',
        ],
    'mysql_connect' =>
        [
            'signatureArguments' => '$server = \'ini_get("mysql.default_host")\', $username = \'ini_get("mysql.default_user")\', $password = \'ini_get("mysql.default_password")\', $new_link = false, $client_flags = 0',
            'arguments' => '$server, $username, $password, $new_link, $client_flags',
        ],
    'mysql_pconnect' =>
        [
            'signatureArguments' => '$server = \'ini_get("mysql.default_host")\', $username = \'ini_get("mysql.default_user")\', $password = \'ini_get("mysql.default_password")\', $client_flags = null',
            'arguments' => '$server, $username, $password, $client_flags',
        ],
    'mysql_close' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_select_db' =>
        [
            'signatureArguments' => '$database_name, $link_identifier = null',
            'arguments' => '$database_name, $link_identifier',
        ],
    'mysql_query' =>
        [
            'signatureArguments' => '$query, $link_identifier = null',
            'arguments' => '$query, $link_identifier',
        ],
    'mysql_unbuffered_query' =>
        [
            'signatureArguments' => '$query, $link_identifier = null',
            'arguments' => '$query, $link_identifier',
        ],
    'mysql_db_query' =>
        [
            'signatureArguments' => '$database, $query, $link_identifier = null',
            'arguments' => '$database, $query, $link_identifier',
        ],
    'mysql_list_dbs' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_list_tables' =>
        [
            'signatureArguments' => '$database, $link_identifier = null',
            'arguments' => '$database, $link_identifier',
        ],
    'mysql_list_fields' =>
        [
            'signatureArguments' => '$database_name, $table_name, $link_identifier = null',
            'arguments' => '$database_name, $table_name, $link_identifier',
        ],
    'mysql_list_processes' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_error' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_errno' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_affected_rows' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_insert_id' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_result' =>
        [
            'signatureArguments' => '$result, $row, $field = 0',
            'arguments' => '$result, $row, $field',
        ],
    'mysql_num_rows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_num_fields' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_fetch_row' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_fetch_array' =>
        [
            'signatureArguments' => '$result, $result_type = MYSQL_BOTH',
            'arguments' => '$result, $result_type',
        ],
    'mysql_fetch_assoc' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_fetch_object' =>
        [
            'signatureArguments' => '$result, $class_name = \'stdClass\', array $params = null',
            'arguments' => '$result, $class_name, $params',
        ],
    'mysql_data_seek' =>
        [
            'signatureArguments' => '$result, $row_number',
            'arguments' => '$result, $row_number',
        ],
    'mysql_fetch_lengths' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_fetch_field' =>
        [
            'signatureArguments' => '$result, $field_offset = 0',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_field_seek' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_free_result' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_field_name' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_field_table' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_field_len' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_field_type' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_field_flags' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_escape_string' =>
        [
            'signatureArguments' => '$unescaped_string',
            'arguments' => '$unescaped_string',
        ],
    'mysql_real_escape_string' =>
        [
            'signatureArguments' => '$unescaped_string, $link_identifier = null',
            'arguments' => '$unescaped_string, $link_identifier',
        ],
    'mysql_stat' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_thread_id' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_client_encoding' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_ping' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_get_client_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mysql_get_host_info' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_get_proto_info' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_get_server_info' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_info' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mysql_set_charset' =>
        [
            'signatureArguments' => '$charset, $link_identifier = null',
            'arguments' => '$charset, $link_identifier',
        ],
    'mysql' =>
        [
            'signatureArguments' => '$database_name, $query, $link_identifier',
            'arguments' => '$database_name, $query, $link_identifier',
        ],
    'mysql_fieldname' =>
        [
            'signatureArguments' => '$result, $field_index',
            'arguments' => '$result, $field_index',
        ],
    'mysql_fieldtable' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_fieldlen' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_fieldtype' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_fieldflags' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mysql_selectdb' =>
        [
            'signatureArguments' => '$database_name, $link_identifier',
            'arguments' => '$database_name, $link_identifier',
        ],
    'mysql_freeresult' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_numfields' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_numrows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mysql_listdbs' =>
        [
            'signatureArguments' => '$link_identifier',
            'arguments' => '$link_identifier',
        ],
    'mysql_listtables' =>
        [
            'signatureArguments' => '$database_name, $link_identifier',
            'arguments' => '$database_name, $link_identifier',
        ],
    'mysql_listfields' =>
        [
            'signatureArguments' => '$database_name, $table_name, $link_identifier',
            'arguments' => '$database_name, $table_name, $link_identifier',
        ],
    'mysql_db_name' =>
        [
            'signatureArguments' => '$result, $row, $field = null',
            'arguments' => '$result, $row, $field',
        ],
    'mysql_dbname' =>
        [
            'signatureArguments' => '$result, $row, $field',
            'arguments' => '$result, $row, $field',
        ],
    'mysql_tablename' =>
        [
            'signatureArguments' => '$result, $i',
            'arguments' => '$result, $i',
        ],
    'mysql_table_name' =>
        [
            'signatureArguments' => '$result, $row, $field',
            'arguments' => '$result, $row, $field',
        ],
    'mcrypt_ecb' =>
        [
            'signatureArguments' => '$cipher, $key, $data, $mode',
            'arguments' => '$cipher, $key, $data, $mode',
        ],
    'mcrypt_cbc' =>
        [
            'signatureArguments' => '$cipher, $key, $data, $mode, $iv = null',
            'arguments' => '$cipher, $key, $data, $mode, $iv',
        ],
    'mcrypt_cfb' =>
        [
            'signatureArguments' => '$cipher, $key, $data, $mode, $iv = null',
            'arguments' => '$cipher, $key, $data, $mode, $iv',
        ],
    'mcrypt_ofb' =>
        [
            'signatureArguments' => '$cipher, $key, $data, $mode, $iv = null',
            'arguments' => '$cipher, $key, $data, $mode, $iv',
        ],
    'mcrypt_get_key_size' =>
        [
            'signatureArguments' => '$cipher, $module',
            'arguments' => '$cipher, $module',
        ],
    'mcrypt_get_block_size' =>
        [
            'signatureArguments' => '$cipher, $module',
            'arguments' => '$cipher, $module',
        ],
    'mcrypt_get_cipher_name' =>
        [
            'signatureArguments' => '$cipher',
            'arguments' => '$cipher',
        ],
    'mcrypt_create_iv' =>
        [
            'signatureArguments' => '$size, $source = MCRYPT_DEV_URANDOM',
            'arguments' => '$size, $source',
        ],
    'mcrypt_list_algorithms' =>
        [
            'signatureArguments' => '$lib_dir = null',
            'arguments' => '$lib_dir',
        ],
    'mcrypt_list_modes' =>
        [
            'signatureArguments' => '$lib_dir = null',
            'arguments' => '$lib_dir',
        ],
    'mcrypt_get_iv_size' =>
        [
            'signatureArguments' => '$cipher, $module',
            'arguments' => '$cipher, $module',
        ],
    'mcrypt_encrypt' =>
        [
            'signatureArguments' => '$cipher, $key, $data, $mode, $iv = null',
            'arguments' => '$cipher, $key, $data, $mode, $iv',
        ],
    'mcrypt_decrypt' =>
        [
            'signatureArguments' => '$cipher, $key, $data, $mode, $iv = null',
            'arguments' => '$cipher, $key, $data, $mode, $iv',
        ],
    'mcrypt_module_open' =>
        [
            'signatureArguments' => '$cipher, $cipher_directory, $mode, $mode_directory',
            'arguments' => '$cipher, $cipher_directory, $mode, $mode_directory',
        ],
    'mcrypt_generic_init' =>
        [
            'signatureArguments' => '$td, $key, $iv',
            'arguments' => '$td, $key, $iv',
        ],
    'mcrypt_generic' =>
        [
            'signatureArguments' => '$td, $data',
            'arguments' => '$td, $data',
        ],
    'mdecrypt_generic' =>
        [
            'signatureArguments' => '$td, $data',
            'arguments' => '$td, $data',
        ],
    'mcrypt_generic_end' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_generic_deinit' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_self_test' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_is_block_algorithm_mode' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_is_block_algorithm' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_is_block_mode' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_get_block_size' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_get_key_size' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_get_supported_key_sizes' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_get_iv_size' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_get_algorithms_name' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_enc_get_modes_name' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'mcrypt_module_self_test' =>
        [
            'signatureArguments' => '$algorithm, $lib_dir = null',
            'arguments' => '$algorithm, $lib_dir',
        ],
    'mcrypt_module_is_block_algorithm_mode' =>
        [
            'signatureArguments' => '$mode, $lib_dir = null',
            'arguments' => '$mode, $lib_dir',
        ],
    'mcrypt_module_is_block_algorithm' =>
        [
            'signatureArguments' => '$algorithm, $lib_dir = null',
            'arguments' => '$algorithm, $lib_dir',
        ],
    'mcrypt_module_is_block_mode' =>
        [
            'signatureArguments' => '$mode, $lib_dir = null',
            'arguments' => '$mode, $lib_dir',
        ],
    'mcrypt_module_get_algo_block_size' =>
        [
            'signatureArguments' => '$algorithm, $lib_dir = null',
            'arguments' => '$algorithm, $lib_dir',
        ],
    'mcrypt_module_get_algo_key_size' =>
        [
            'signatureArguments' => '$algorithm, $lib_dir = null',
            'arguments' => '$algorithm, $lib_dir',
        ],
    'mcrypt_module_get_supported_key_sizes' =>
        [
            'signatureArguments' => '$algorithm, $lib_dir = null',
            'arguments' => '$algorithm, $lib_dir',
        ],
    'mcrypt_module_close' =>
        [
            'signatureArguments' => '$td',
            'arguments' => '$td',
        ],
    'crypto_aead_aes256gcm_is_available' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'crypto_box_keypair' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'crypto_sign_keypair' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'randombytes_random16' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'library_version_major' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'library_version_minor' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'memzero' =>
        [
            'signatureArguments' => 'string &$target',
            'arguments' => '$target',
        ],
    'version_string' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'crypto_scalarmult_base' =>
        [
            'signatureArguments' => 'string $sk',
            'arguments' => '$sk',
        ],
    'mysqli_affected_rows' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_autocommit' =>
        [
            'signatureArguments' => 'mysqli $mysql, bool $enable',
            'arguments' => '$mysql, $enable',
        ],
    'mysqli_begin_transaction' =>
        [
            'signatureArguments' => 'mysqli $mysql, int $flags = 0, ?string $name',
            'arguments' => '$mysql, $flags, $name',
        ],
    'mysqli_change_user' =>
        [
            'signatureArguments' => 'mysqli $mysql, string $username, string $password, ?string $database',
            'arguments' => '$mysql, $username, $password, $database',
        ],
    'mysqli_character_set_name' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_close' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_commit' =>
        [
            'signatureArguments' => 'mysqli $mysql, int $flags = 0, ?string $name = null',
            'arguments' => '$mysql, $flags, $name',
        ],
    'mysqli_connect' =>
        [
            'signatureArguments' => '?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null',
            'arguments' => '$hostname, $username, $password, $database, $port, $socket',
        ],
    'mysqli_connect_errno' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mysqli_connect_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mysqli_data_seek' =>
        [
            'signatureArguments' => 'mysqli_result $result, int $offset',
            'arguments' => '$result, $offset',
        ],
    'mysqli_dump_debug_info' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_debug' =>
        [
            'signatureArguments' => 'string $options',
            'arguments' => '$options',
        ],
    'mysqli_errno' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_error_list' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_stmt_error_list' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_error' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_stmt_execute' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, ?array $params = null',
            'arguments' => '$statement, $params',
        ],
    'mysqli_execute' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, ?array $params = null',
            'arguments' => '$statement, $params',
        ],
    'mysqli_execute_query' =>
        [
            'signatureArguments' => 'mysqli $mysql, string $query, ?array $params = null',
            'arguments' => '$mysql, $query, $params',
        ],
    'mysqli_fetch_field' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_fetch_fields' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_fetch_field_direct' =>
        [
            'signatureArguments' => 'mysqli_result $result, int $index',
            'arguments' => '$result, $index',
        ],
    'mysqli_fetch_lengths' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_fetch_array' =>
        [
            'signatureArguments' => 'mysqli_result $result, int $mode = MYSQLI_BOTH',
            'arguments' => '$result, $mode',
        ],
    'mysqli_fetch_assoc' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_fetch_object' =>
        [
            'signatureArguments' => 'mysqli_result $result, string $class = \'stdClass\', array $constructor_args = []',
            'arguments' => '$result, $class, $constructor_args',
        ],
    'mysqli_fetch_row' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_fetch_column' =>
        [
            'signatureArguments' => 'mysqli_result $result, int $column = 0',
            'arguments' => '$result, $column',
        ],
    'mysqli_field_count' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_field_seek' =>
        [
            'signatureArguments' => 'mysqli_result $result, int $index',
            'arguments' => '$result, $index',
        ],
    'mysqli_field_tell' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_free_result' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_get_cache_stats' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_get_connection_stats' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_get_client_stats' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mysqli_get_charset' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_get_client_version' =>
        [
            'signatureArguments' => '$link',
            'arguments' => '$link',
        ],
    'mysqli_get_host_info' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_get_links_stats' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mysqli_get_proto_info' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_get_server_info' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_get_server_version' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_get_warnings' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_init' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mysqli_info' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_insert_id' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_kill' =>
        [
            'signatureArguments' => 'mysqli $mysql, int $process_id',
            'arguments' => '$mysql, $process_id',
        ],
    'mysqli_set_local_infile_default' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_set_local_infile_handler' =>
        [
            'signatureArguments' => 'mysqli $mysql, callable $read_func',
            'arguments' => '$mysql, $read_func',
        ],
    'mysqli_more_results' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_next_result' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_num_fields' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_num_rows' =>
        [
            'signatureArguments' => 'mysqli_result $result',
            'arguments' => '$result',
        ],
    'mysqli_options' =>
        [
            'signatureArguments' => 'mysqli $mysql, int $option, $value',
            'arguments' => '$mysql, $option, $value',
        ],
    'mysqli_ping' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_poll' =>
        [
            'signatureArguments' => '?array &$read, ?array &$error, array &$reject, int $seconds, int $microseconds = 0',
            'arguments' => '$read, $error, $reject, $seconds, $microseconds',
        ],
    'mysqli_prepare' =>
        [
            'signatureArguments' => 'mysqli $mysql, string $query',
            'arguments' => '$mysql, $query',
        ],
    'mysqli_report' =>
        [
            'signatureArguments' => 'int $flags',
            'arguments' => '$flags',
        ],
    'mysqli_real_connect' =>
        [
            'signatureArguments' => 'mysqli $mysql, ?string $hostname, ?string $username, ?string $password, ?string $database, ?int $port, ?string $socket, int $flags = 0',
            'arguments' => '$mysql, $hostname, $username, $password, $database, $port, $socket, $flags',
        ],
    'mysqli_real_escape_string' =>
        [
            'signatureArguments' => 'mysqli $mysql, string $string',
            'arguments' => '$mysql, $string',
        ],
    'mysqli_reap_async_query' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_release_savepoint' =>
        [
            'signatureArguments' => 'mysqli $mysql, string $name',
            'arguments' => '$mysql, $name',
        ],
    'mysqli_rollback' =>
        [
            'signatureArguments' => 'mysqli $mysql, int $flags = 0, ?string $name',
            'arguments' => '$mysql, $flags, $name',
        ],
    'mysqli_savepoint' =>
        [
            'signatureArguments' => 'mysqli $mysql, string $name',
            'arguments' => '$mysql, $name',
        ],
    'mysqli_select_db' =>
        [
            'signatureArguments' => 'mysqli $mysql, string $database',
            'arguments' => '$mysql, $database',
        ],
    'mysqli_set_charset' =>
        [
            'signatureArguments' => 'mysqli $mysql, string $charset',
            'arguments' => '$mysql, $charset',
        ],
    'mysqli_stmt_affected_rows' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_attr_get' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, int $attribute',
            'arguments' => '$statement, $attribute',
        ],
    'mysqli_stmt_attr_set' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, int $attribute, int $value',
            'arguments' => '$statement, $attribute, $value',
        ],
    'mysqli_stmt_field_count' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_init' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_stmt_prepare' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, string $query',
            'arguments' => '$statement, $query',
        ],
    'mysqli_stmt_result_metadata' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_send_long_data' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, int $param_num, string $data',
            'arguments' => '$statement, $param_num, $data',
        ],
    'mysqli_stmt_fetch' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_free_result' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_get_result' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_get_warnings' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_insert_id' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_reset' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_param_count' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_sqlstate' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_stat' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_stmt_close' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_data_seek' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, int $offset',
            'arguments' => '$statement, $offset',
        ],
    'mysqli_stmt_errno' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_error' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_more_results' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_next_result' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_num_rows' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_sqlstate' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_stmt_store_result' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_store_result' =>
        [
            'signatureArguments' => 'mysqli $mysql, int $mode = 0',
            'arguments' => '$mysql, $mode',
        ],
    'mysqli_thread_id' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_thread_safe' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mysqli_use_result' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_warning_count' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_refresh' =>
        [
            'signatureArguments' => 'mysqli $mysql, int $flags',
            'arguments' => '$mysql, $flags',
        ],
    'mysqli_bind_param' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, string $types',
            'arguments' => '$statement, $types',
        ],
    'mysqli_bind_result' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, string $types, mixed &$var1',
            'arguments' => '$statement, $types, $var1',
        ],
    'mysqli_client_encoding' =>
        [
            'signatureArguments' => 'mysqli $mysql',
            'arguments' => '$mysql',
        ],
    'mysqli_fetch' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_param_count' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_get_metadata' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement',
            'arguments' => '$statement',
        ],
    'mysqli_send_long_data' =>
        [
            'signatureArguments' => 'mysqli_stmt $statement, int $param_num, string $data',
            'arguments' => '$statement, $param_num, $data',
        ],
    'dio_close' =>
        [
            'signatureArguments' => '$fd',
            'arguments' => '$fd',
        ],
    'dio_fcntl' =>
        [
            'signatureArguments' => '$fd, int $cmd, ...$args',
            'arguments' => '$fd, $cmd, $args',
        ],
    'dio_open' =>
        [
            'signatureArguments' => 'string $filename, int $flags, int $mode = 0',
            'arguments' => '$filename, $flags, $mode',
        ],
    'dio_read' =>
        [
            'signatureArguments' => '$fd, int $len = 1024',
            'arguments' => '$fd, $len',
        ],
    'dio_seek' =>
        [
            'signatureArguments' => '$fd, int $pos, int $whence = SEEK_SET',
            'arguments' => '$fd, $pos, $whence',
        ],
    'dio_stat' =>
        [
            'signatureArguments' => '$fd',
            'arguments' => '$fd',
        ],
    'dio_tcsetattr' =>
        [
            'signatureArguments' => '$fd, array $options',
            'arguments' => '$fd, $options',
        ],
    'dio_truncate' =>
        [
            'signatureArguments' => '$fd, int $offset',
            'arguments' => '$fd, $offset',
        ],
    'dio_write' =>
        [
            'signatureArguments' => '$fd, string $data, int $len = 0',
            'arguments' => '$fd, $data, $len',
        ],
    'dio_raw' =>
        [
            'signatureArguments' => 'string $filename, string $mode, ?array $options',
            'arguments' => '$filename, $mode, $options',
        ],
    'dio_serial' =>
        [
            'signatureArguments' => 'string $filename, string $mode, ?array $options',
            'arguments' => '$filename, $mode, $options',
        ],
    'PDF_activate_item' =>
        [
            'signatureArguments' => '$pdf, $id',
            'arguments' => '$pdf, $id',
        ],
    'PDF_add_launchlink' =>
        [
            'signatureArguments' => '$pdf, $llx, $lly, $urx, $ury, $filename',
            'arguments' => '$pdf, $llx, $lly, $urx, $ury, $filename',
        ],
    'PDF_add_locallink' =>
        [
            'signatureArguments' => '$pdf, $lowerleftx, $lowerlefty, $upperrightx, $upperrighty, $page, $dest',
            'arguments' => '$pdf, $lowerleftx, $lowerlefty, $upperrightx, $upperrighty, $page, $dest',
        ],
    'PDF_add_nameddest' =>
        [
            'signatureArguments' => '$pdf, $name, $optlist',
            'arguments' => '$pdf, $name, $optlist',
        ],
    'PDF_add_note' =>
        [
            'signatureArguments' => '$pdf, $llx, $lly, $urx, $ury, $contents, $title, $icon, $open',
            'arguments' => '$pdf, $llx, $lly, $urx, $ury, $contents, $title, $icon, $open',
        ],
    'PDF_add_pdflink' =>
        [
            'signatureArguments' => '$pdf, $bottom_left_x, $bottom_left_y, $up_right_x, $up_right_y, $filename, $page, $dest',
            'arguments' => '$pdf, $bottom_left_x, $bottom_left_y, $up_right_x, $up_right_y, $filename, $page, $dest',
        ],
    'PDF_add_table_cell' =>
        [
            'signatureArguments' => '$pdf, $table, $column, $row, $text, $optlist',
            'arguments' => '$pdf, $table, $column, $row, $text, $optlist',
        ],
    'PDF_add_textflow' =>
        [
            'signatureArguments' => '$pdf, $textflow, $text, $optlist',
            'arguments' => '$pdf, $textflow, $text, $optlist',
        ],
    'PDF_add_thumbnail' =>
        [
            'signatureArguments' => '$pdf, $image',
            'arguments' => '$pdf, $image',
        ],
    'PDF_add_weblink' =>
        [
            'signatureArguments' => '$pdf, $lowerleftx, $lowerlefty, $upperrightx, $upperrighty, $url',
            'arguments' => '$pdf, $lowerleftx, $lowerlefty, $upperrightx, $upperrighty, $url',
        ],
    'PDF_arc' =>
        [
            'signatureArguments' => '$pdf, $x, $y, $r, $alpha, $beta',
            'arguments' => '$pdf, $x, $y, $r, $alpha, $beta',
        ],
    'PDF_arcn' =>
        [
            'signatureArguments' => '$pdf, $x, $y, $r, $alpha, $beta',
            'arguments' => '$pdf, $x, $y, $r, $alpha, $beta',
        ],
    'PDF_attach_file' =>
        [
            'signatureArguments' => '$pdf, $llx, $lly, $urx, $ury, $filename, $description, $author, $mimetype, $icon',
            'arguments' => '$pdf, $llx, $lly, $urx, $ury, $filename, $description, $author, $mimetype, $icon',
        ],
    'PDF_begin_document' =>
        [
            'signatureArguments' => '$pdf, $filename, $optlist',
            'arguments' => '$pdf, $filename, $optlist',
        ],
    'PDF_begin_font' =>
        [
            'signatureArguments' => '$pdf, $filename, $a, $b, $c, $d, $e, $f, $optlist',
            'arguments' => '$pdf, $filename, $a, $b, $c, $d, $e, $f, $optlist',
        ],
    'PDF_begin_glyph' =>
        [
            'signatureArguments' => '$pdf, $glyphname, $wx, $llx, $lly, $urx, $ury',
            'arguments' => '$pdf, $glyphname, $wx, $llx, $lly, $urx, $ury',
        ],
    'PDF_begin_item' =>
        [
            'signatureArguments' => '$pdf, $tag, $optlist',
            'arguments' => '$pdf, $tag, $optlist',
        ],
    'PDF_begin_layer' =>
        [
            'signatureArguments' => '$pdf, $layer',
            'arguments' => '$pdf, $layer',
        ],
    'PDF_begin_page_ext' =>
        [
            'signatureArguments' => '$pdf, $width, $height, $optlist',
            'arguments' => '$pdf, $width, $height, $optlist',
        ],
    'PDF_begin_page' =>
        [
            'signatureArguments' => '$pdf, $width, $height',
            'arguments' => '$pdf, $width, $height',
        ],
    'PDF_begin_pattern' =>
        [
            'signatureArguments' => '$pdf, $width, $height, $xstep, $ystep, $painttype',
            'arguments' => '$pdf, $width, $height, $xstep, $ystep, $painttype',
        ],
    'PDF_begin_template_ext' =>
        [
            'signatureArguments' => '$pdf, $width, $height, $optlist',
            'arguments' => '$pdf, $width, $height, $optlist',
        ],
    'PDF_begin_template' =>
        [
            'signatureArguments' => '$pdf, $width, $height',
            'arguments' => '$pdf, $width, $height',
        ],
    'PDF_circle' =>
        [
            'signatureArguments' => '$pdf, $x, $y, $r',
            'arguments' => '$pdf, $x, $y, $r',
        ],
    'PDF_clip' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_close_image' =>
        [
            'signatureArguments' => '$pdf, $image',
            'arguments' => '$pdf, $image',
        ],
    'PDF_close_pdi_page' =>
        [
            'signatureArguments' => '$pdf, $page',
            'arguments' => '$pdf, $page',
        ],
    'PDF_close_pdi' =>
        [
            'signatureArguments' => '$pdf, $doc',
            'arguments' => '$pdf, $doc',
        ],
    'PDF_close' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_closepath_fill_stroke' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_closepath_stroke' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_closepath' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_concat' =>
        [
            'signatureArguments' => '$pdf, $a, $b, $c, $d, $e, $f',
            'arguments' => '$pdf, $a, $b, $c, $d, $e, $f',
        ],
    'PDF_continue_text' =>
        [
            'signatureArguments' => '$pdf, $text',
            'arguments' => '$pdf, $text',
        ],
    'PDF_create_3dview' =>
        [
            'signatureArguments' => '$pdf, $username, $optlist',
            'arguments' => '$pdf, $username, $optlist',
        ],
    'PDF_create_action' =>
        [
            'signatureArguments' => '$pdf, $type, $optlist',
            'arguments' => '$pdf, $type, $optlist',
        ],
    'PDF_create_annotation' =>
        [
            'signatureArguments' => '$pdf, $llx, $lly, $urx, $ury, $type, $optlist',
            'arguments' => '$pdf, $llx, $lly, $urx, $ury, $type, $optlist',
        ],
    'PDF_create_bookmark' =>
        [
            'signatureArguments' => '$pdf, $text, $optlist',
            'arguments' => '$pdf, $text, $optlist',
        ],
    'PDF_create_field' =>
        [
            'signatureArguments' => '$pdf, $llx, $lly, $urx, $ury, $name, $type, $optlist',
            'arguments' => '$pdf, $llx, $lly, $urx, $ury, $name, $type, $optlist',
        ],
    'PDF_create_fieldgroup' =>
        [
            'signatureArguments' => '$pdf, $name, $optlist',
            'arguments' => '$pdf, $name, $optlist',
        ],
    'PDF_create_gstate' =>
        [
            'signatureArguments' => '$pdf, $optlist',
            'arguments' => '$pdf, $optlist',
        ],
    'PDF_create_pvf' =>
        [
            'signatureArguments' => '$pdf, $filename, $data, $optlist',
            'arguments' => '$pdf, $filename, $data, $optlist',
        ],
    'PDF_create_textflow' =>
        [
            'signatureArguments' => '$pdf, $text, $optlist',
            'arguments' => '$pdf, $text, $optlist',
        ],
    'PDF_curveto' =>
        [
            'signatureArguments' => '$pdf, $x1, $y1, $x2, $y2, $x3, $y3',
            'arguments' => '$pdf, $x1, $y1, $x2, $y2, $x3, $y3',
        ],
    'PDF_define_layer' =>
        [
            'signatureArguments' => '$pdf, $name, $optlist',
            'arguments' => '$pdf, $name, $optlist',
        ],
    'PDF_delete_pvf' =>
        [
            'signatureArguments' => '$pdf, $filename',
            'arguments' => '$pdf, $filename',
        ],
    'PDF_delete_table' =>
        [
            'signatureArguments' => '$pdf, $table, $optlist',
            'arguments' => '$pdf, $table, $optlist',
        ],
    'PDF_delete_textflow' =>
        [
            'signatureArguments' => '$pdf, $textflow',
            'arguments' => '$pdf, $textflow',
        ],
    'PDF_delete' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_encoding_set_char' =>
        [
            'signatureArguments' => '$pdf, $encoding, $slot, $glyphname, $uv',
            'arguments' => '$pdf, $encoding, $slot, $glyphname, $uv',
        ],
    'PDF_end_document' =>
        [
            'signatureArguments' => '$pdf, $optlist',
            'arguments' => '$pdf, $optlist',
        ],
    'PDF_end_font' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_end_glyph' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_end_item' =>
        [
            'signatureArguments' => '$pdf, $id',
            'arguments' => '$pdf, $id',
        ],
    'PDF_end_layer' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_end_page_ext' =>
        [
            'signatureArguments' => '$pdf, $optlist',
            'arguments' => '$pdf, $optlist',
        ],
    'PDF_end_page' =>
        [
            'signatureArguments' => '$p',
            'arguments' => '$p',
        ],
    'PDF_end_pattern' =>
        [
            'signatureArguments' => '$p',
            'arguments' => '$p',
        ],
    'PDF_end_template' =>
        [
            'signatureArguments' => '$p',
            'arguments' => '$p',
        ],
    'PDF_endpath' =>
        [
            'signatureArguments' => '$p',
            'arguments' => '$p',
        ],
    'PDF_fill_imageblock' =>
        [
            'signatureArguments' => '$pdf, $page, $blockname, $image, $optlist',
            'arguments' => '$pdf, $page, $blockname, $image, $optlist',
        ],
    'PDF_fill_pdfblock' =>
        [
            'signatureArguments' => '$pdf, $page, $blockname, $contents, $optlist',
            'arguments' => '$pdf, $page, $blockname, $contents, $optlist',
        ],
    'PDF_fill_stroke' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_fill_textblock' =>
        [
            'signatureArguments' => '$pdf, $page, $blockname, $text, $optlist',
            'arguments' => '$pdf, $page, $blockname, $text, $optlist',
        ],
    'PDF_fill' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_findfont' =>
        [
            'signatureArguments' => '$pdf, $fontname, $encoding, $embed',
            'arguments' => '$pdf, $fontname, $encoding, $embed',
        ],
    'PDF_fit_image' =>
        [
            'signatureArguments' => '$pdf, $image, $x, $y, $optlist',
            'arguments' => '$pdf, $image, $x, $y, $optlist',
        ],
    'PDF_fit_pdi_page' =>
        [
            'signatureArguments' => '$pdf, $page, $x, $y, $optlist',
            'arguments' => '$pdf, $page, $x, $y, $optlist',
        ],
    'PDF_fit_table' =>
        [
            'signatureArguments' => '$pdf, $table, $llx, $lly, $urx, $ury, $optlist',
            'arguments' => '$pdf, $table, $llx, $lly, $urx, $ury, $optlist',
        ],
    'PDF_fit_textflow' =>
        [
            'signatureArguments' => '$pdf, $textflow, $llx, $lly, $urx, $ury, $optlist',
            'arguments' => '$pdf, $textflow, $llx, $lly, $urx, $ury, $optlist',
        ],
    'PDF_fit_textline' =>
        [
            'signatureArguments' => '$pdf, $text, $x, $y, $optlist',
            'arguments' => '$pdf, $text, $x, $y, $optlist',
        ],
    'PDF_get_apiname' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_get_buffer' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_get_errmsg' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_get_errnum' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_get_majorversion' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'PDF_get_minorversion' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'PDF_get_parameter' =>
        [
            'signatureArguments' => '$pdf, $key, $modifier',
            'arguments' => '$pdf, $key, $modifier',
        ],
    'PDF_get_pdi_parameter' =>
        [
            'signatureArguments' => '$pdf, $key, $doc, $page, $reserved',
            'arguments' => '$pdf, $key, $doc, $page, $reserved',
        ],
    'PDF_get_pdi_value' =>
        [
            'signatureArguments' => '$pdf, $key, $doc, $page, $reserved',
            'arguments' => '$pdf, $key, $doc, $page, $reserved',
        ],
    'PDF_get_value' =>
        [
            'signatureArguments' => '$pdf, $key, $modifier',
            'arguments' => '$pdf, $key, $modifier',
        ],
    'PDF_info_font' =>
        [
            'signatureArguments' => '$pdf, $font, $keyword, $optlist',
            'arguments' => '$pdf, $font, $keyword, $optlist',
        ],
    'PDF_info_matchbox' =>
        [
            'signatureArguments' => '$pdf, $boxname, $num, $keyword',
            'arguments' => '$pdf, $boxname, $num, $keyword',
        ],
    'PDF_info_table' =>
        [
            'signatureArguments' => '$pdf, $table, $keyword',
            'arguments' => '$pdf, $table, $keyword',
        ],
    'PDF_info_textflow' =>
        [
            'signatureArguments' => '$pdf, $textflow, $keyword',
            'arguments' => '$pdf, $textflow, $keyword',
        ],
    'PDF_info_textline' =>
        [
            'signatureArguments' => '$pdf, $text, $keyword, $optlist',
            'arguments' => '$pdf, $text, $keyword, $optlist',
        ],
    'PDF_initgraphics' =>
        [
            'signatureArguments' => '$pdf',
            'arguments' => '$pdf',
        ],
    'PDF_lineto' =>
        [
            'signatureArguments' => '$pdf, $x, $y',
            'arguments' => '$pdf, $x, $y',
        ],
    'PDF_load_3ddata' =>
        [
            'signatureArguments' => '$pdf, $filename, $optlist',
            'arguments' => '$pdf, $filename, $optlist',
        ],
    'PDF_load_font' =>
        [
            'signatureArguments' => '$pdf, $fontname, $encoding, $optlist',
            'arguments' => '$pdf, $fontname, $encoding, $optlist',
        ],
    'PDF_load_iccprofile' =>
        [
            'signatureArguments' => '$pdf, $profilename, $optlist',
            'arguments' => '$pdf, $profilename, $optlist',
        ],
    'PDF_load_image' =>
        [
            'signatureArguments' => '$pdf, $imagetype, $filename, $optlist',
            'arguments' => '$pdf, $imagetype, $filename, $optlist',
        ],
    'PDF_makespotcolor' =>
        [
            'signatureArguments' => '$pdf, $spotname',
            'arguments' => '$pdf, $spotname',
        ],
    'PDF_moveto' =>
        [
            'signatureArguments' => '$pdf, $x, $y',
            'arguments' => '$pdf, $x, $y',
        ],
    'PDF_new' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'PDF_open_ccitt' =>
        [
            'signatureArguments' => '$pdf, $filename, $width, $height, $BitReverse, $k, $Blackls1',
            'arguments' => '$pdf, $filename, $width, $height, $BitReverse, $k, $Blackls1',
        ],
    'PDF_open_file' =>
        [
            'signatureArguments' => '$pdf, $filename',
            'arguments' => '$pdf, $filename',
        ],
    'PDF_open_image_file' =>
        [
            'signatureArguments' => '$pdf, $imagetype, $filename, $stringparam, $intparam',
            'arguments' => '$pdf, $imagetype, $filename, $stringparam, $intparam',
        ],
    'PDF_open_image' =>
        [
            'signatureArguments' => '$pdf, $imagetype, $source, $data, $length, $width, $height, $components, $bpc, $params',
            'arguments' => '$pdf, $imagetype, $source, $data, $length, $width, $height, $components, $bpc, $params',
        ],
    'PDF_open_memory_image' =>
        [
            'signatureArguments' => '$pdf, $image',
            'arguments' => '$pdf, $image',
        ],
    'PDF_open_pdi_document' =>
        [
            'signatureArguments' => '$pdf, $filename, $optlist',
            'arguments' => '$pdf, $filename, $optlist',
        ],
    'PDF_open_pdi_page' =>
        [
            'signatureArguments' => '$pdf, $doc, $pagenumber, $optlist',
            'arguments' => '$pdf, $doc, $pagenumber, $optlist',
        ],
    'PDF_open_pdi' =>
        [
            'signatureArguments' => '$pdf, $filename, $optlist, $len',
            'arguments' => '$pdf, $filename, $optlist, $len',
        ],
    'PDF_pcos_get_number' =>
        [
            'signatureArguments' => '$pdf, $doc, $path',
            'arguments' => '$pdf, $doc, $path',
        ],
    'PDF_pcos_get_stream' =>
        [
            'signatureArguments' => '$pdf, $doc, $optlist, $path',
            'arguments' => '$pdf, $doc, $optlist, $path',
        ],
    'PDF_pcos_get_string' =>
        [
            'signatureArguments' => '$pdf, $doc, $path',
            'arguments' => '$pdf, $doc, $path',
        ],
    'PDF_place_image' =>
        [
            'signatureArguments' => '$pdf, $image, $x, $y, $scale',
            'arguments' => '$pdf, $image, $x, $y, $scale',
        ],
    'PDF_place_pdi_page' =>
        [
            'signatureArguments' => '$pdf, $page, $x, $y, $sx, $sy',
            'arguments' => '$pdf, $page, $x, $y, $sx, $sy',
        ],
    'PDF_process_pdi' =>
        [
            'signatureArguments' => '$pdf, $doc, $page, $optlist',
            'arguments' => '$pdf, $doc, $page, $optlist',
        ],
    'PDF_rect' =>
        [
            'signatureArguments' => '$pdf, $x, $y, $width, $height',
            'arguments' => '$pdf, $x, $y, $width, $height',
        ],
    'PDF_restore' =>
        [
            'signatureArguments' => '$p',
            'arguments' => '$p',
        ],
    'PDF_resume_page' =>
        [
            'signatureArguments' => '$pdf, $optlist',
            'arguments' => '$pdf, $optlist',
        ],
    'PDF_rotate' =>
        [
            'signatureArguments' => '$pdf, $phi',
            'arguments' => '$pdf, $phi',
        ],
    'PDF_save' =>
        [
            'signatureArguments' => '$p',
            'arguments' => '$p',
        ],
    'PDF_scale' =>
        [
            'signatureArguments' => '$pdf, $sx, $sy',
            'arguments' => '$pdf, $sx, $sy',
        ],
    'PDF_set_border_color' =>
        [
            'signatureArguments' => '$pdf, $red, $green, $blue',
            'arguments' => '$pdf, $red, $green, $blue',
        ],
    'PDF_set_border_dash' =>
        [
            'signatureArguments' => '$pdf, $black, $white',
            'arguments' => '$pdf, $black, $white',
        ],
    'PDF_set_border_style' =>
        [
            'signatureArguments' => '$pdf, $style, $width',
            'arguments' => '$pdf, $style, $width',
        ],
    'PDF_set_gstate' =>
        [
            'signatureArguments' => '$pdf, $gstate',
            'arguments' => '$pdf, $gstate',
        ],
    'PDF_set_info' =>
        [
            'signatureArguments' => '$pdf, $key, $value',
            'arguments' => '$pdf, $key, $value',
        ],
    'PDF_set_layer_dependency' =>
        [
            'signatureArguments' => '$pdf, $type, $optlist',
            'arguments' => '$pdf, $type, $optlist',
        ],
    'PDF_set_parameter' =>
        [
            'signatureArguments' => '$pdf, $key, $value',
            'arguments' => '$pdf, $key, $value',
        ],
    'PDF_set_text_pos' =>
        [
            'signatureArguments' => '$pdf, $x, $y',
            'arguments' => '$pdf, $x, $y',
        ],
    'PDF_set_value' =>
        [
            'signatureArguments' => '$pdf, $key, $value',
            'arguments' => '$pdf, $key, $value',
        ],
    'PDF_setcolor' =>
        [
            'signatureArguments' => '$pdf, $fstype, $colorspace, $c1, $c2, $c3, $c4',
            'arguments' => '$pdf, $fstype, $colorspace, $c1, $c2, $c3, $c4',
        ],
    'PDF_setdash' =>
        [
            'signatureArguments' => '$pdf, $b, $w',
            'arguments' => '$pdf, $b, $w',
        ],
    'PDF_setdashpattern' =>
        [
            'signatureArguments' => '$pdf, $optlist',
            'arguments' => '$pdf, $optlist',
        ],
    'PDF_setflat' =>
        [
            'signatureArguments' => '$pdf, $flatness',
            'arguments' => '$pdf, $flatness',
        ],
    'PDF_setfont' =>
        [
            'signatureArguments' => '$pdf, $font, $fontsize',
            'arguments' => '$pdf, $font, $fontsize',
        ],
    'PDF_setgray_fill' =>
        [
            'signatureArguments' => '$pdf, $g',
            'arguments' => '$pdf, $g',
        ],
    'PDF_setgray_stroke' =>
        [
            'signatureArguments' => '$pdf, $g',
            'arguments' => '$pdf, $g',
        ],
    'PDF_setgray' =>
        [
            'signatureArguments' => '$pdf, $g',
            'arguments' => '$pdf, $g',
        ],
    'PDF_setlinecap' =>
        [
            'signatureArguments' => '$pdf, $linecap',
            'arguments' => '$pdf, $linecap',
        ],
    'PDF_setlinejoin' =>
        [
            'signatureArguments' => '$pdf, $value',
            'arguments' => '$pdf, $value',
        ],
    'PDF_setlinewidth' =>
        [
            'signatureArguments' => '$pdf, $width',
            'arguments' => '$pdf, $width',
        ],
    'PDF_setmatrix' =>
        [
            'signatureArguments' => '$pdf, $a, $b, $c, $d, $e, $f',
            'arguments' => '$pdf, $a, $b, $c, $d, $e, $f',
        ],
    'PDF_setmiterlimit' =>
        [
            'signatureArguments' => '$pdf, $miter',
            'arguments' => '$pdf, $miter',
        ],
    'PDF_setrgbcolor_fill' =>
        [
            'signatureArguments' => '$pdf, $red, $green, $blue',
            'arguments' => '$pdf, $red, $green, $blue',
        ],
    'PDF_setrgbcolor_stroke' =>
        [
            'signatureArguments' => '$pdf, $red, $green, $blue',
            'arguments' => '$pdf, $red, $green, $blue',
        ],
    'PDF_setrgbcolor' =>
        [
            'signatureArguments' => '$pdf, $red, $green, $blue',
            'arguments' => '$pdf, $red, $green, $blue',
        ],
    'PDF_shading_pattern' =>
        [
            'signatureArguments' => '$pdf, $shading, $optlist',
            'arguments' => '$pdf, $shading, $optlist',
        ],
    'PDF_shading' =>
        [
            'signatureArguments' => '$pdf, $shtype, $x0, $y0, $x1, $y1, $c1, $c2, $c3, $c4, $optlist',
            'arguments' => '$pdf, $shtype, $x0, $y0, $x1, $y1, $c1, $c2, $c3, $c4, $optlist',
        ],
    'PDF_shfill' =>
        [
            'signatureArguments' => '$pdf, $shading',
            'arguments' => '$pdf, $shading',
        ],
    'PDF_show_boxed' =>
        [
            'signatureArguments' => '$pdf, $text, $left, $top, $width, $height, $mode, $feature',
            'arguments' => '$pdf, $text, $left, $top, $width, $height, $mode, $feature',
        ],
    'PDF_show_xy' =>
        [
            'signatureArguments' => '$pdf, $text, $x, $y',
            'arguments' => '$pdf, $text, $x, $y',
        ],
    'PDF_show' =>
        [
            'signatureArguments' => '$pdf, $text',
            'arguments' => '$pdf, $text',
        ],
    'PDF_skew' =>
        [
            'signatureArguments' => '$pdf, $alpha, $beta',
            'arguments' => '$pdf, $alpha, $beta',
        ],
    'PDF_stringwidth' =>
        [
            'signatureArguments' => '$pdf, $text, $font, $fontsize',
            'arguments' => '$pdf, $text, $font, $fontsize',
        ],
    'PDF_stroke' =>
        [
            'signatureArguments' => '$p',
            'arguments' => '$p',
        ],
    'PDF_suspend_page' =>
        [
            'signatureArguments' => '$pdf, $optlist',
            'arguments' => '$pdf, $optlist',
        ],
    'PDF_translate' =>
        [
            'signatureArguments' => '$pdf, $tx, $ty',
            'arguments' => '$pdf, $tx, $ty',
        ],
    'PDF_utf16_to_utf8' =>
        [
            'signatureArguments' => '$pdf, $utf16string',
            'arguments' => '$pdf, $utf16string',
        ],
    'PDF_utf32_to_utf16' =>
        [
            'signatureArguments' => '$pdf, $utf32string, $ordering',
            'arguments' => '$pdf, $utf32string, $ordering',
        ],
    'PDF_utf8_to_utf16' =>
        [
            'signatureArguments' => '$pdf, $utf8string, $ordering',
            'arguments' => '$pdf, $utf8string, $ordering',
        ],
    'zend_shm_cache_store' =>
        [
            'signatureArguments' => '$key, $value, $ttl = 0',
            'arguments' => '$key, $value, $ttl',
        ],
    'zend_shm_cache_fetch' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'zend_shm_cache_delete' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'zend_shm_cache_clear' =>
        [
            'signatureArguments' => '$namespace = \'\'',
            'arguments' => '$namespace',
        ],
    'zend_shm_cache_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_disk_cache_store' =>
        [
            'signatureArguments' => '$key, $value, $ttl = 0',
            'arguments' => '$key, $value, $ttl',
        ],
    'zend_disk_cache_fetch' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'zend_disk_cache_delete' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'zend_disk_cache_clear' =>
        [
            'signatureArguments' => '$namespace = \'\'',
            'arguments' => '$namespace',
        ],
    'zend_disk_cache_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'exif_read_data' =>
        [
            'signatureArguments' => '$file, ?string $required_sections, bool $as_arrays = false, bool $read_thumbnail = false',
            'arguments' => '$file, $required_sections, $as_arrays, $read_thumbnail',
        ],
    'read_exif_data' =>
        [
            'signatureArguments' => '$filename, $sections = null, $arrays = false, $thumbnail = false',
            'arguments' => '$filename, $sections, $arrays, $thumbnail',
        ],
    'exif_tagname' =>
        [
            'signatureArguments' => 'int $index',
            'arguments' => '$index',
        ],
    'exif_thumbnail' =>
        [
            'signatureArguments' => '$file, &$width, &$height, &$image_type',
            'arguments' => '$file, $width, $height, $image_type',
        ],
    'exif_imagetype' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'get_kind_name' =>
        [
            'signatureArguments' => 'int $kind',
            'arguments' => '$kind',
        ],
    'get_metadata' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_supported_versions' =>
        [
            'signatureArguments' => 'bool $exclude_deprecated = false',
            'arguments' => '$exclude_deprecated',
        ],
    'kind_uses_flags' =>
        [
            'signatureArguments' => 'int $kind',
            'arguments' => '$kind',
        ],
    'parse_code' =>
        [
            'signatureArguments' => 'string $code, int $version, string $filename = \'string code\'',
            'arguments' => '$code, $version, $filename',
        ],
    'parse_file' =>
        [
            'signatureArguments' => 'string $filename, int $version',
            'arguments' => '$filename, $version',
        ],
    'pg_close' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_connection_status' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_connection_busy' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_connection_reset' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_socket' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_host' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_dbname' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_port' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_tty' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_options' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_version' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_ping' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_parameter_status' =>
        [
            'signatureArguments' => '$connection, string $name',
            'arguments' => '$connection, $name',
        ],
    'pg_transaction_status' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_cancel_query' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_fetch_row' =>
        [
            'signatureArguments' => '$result, ?int $row = null, int $mode = 2',
            'arguments' => '$result, $row, $mode',
        ],
    'pg_fetch_assoc' =>
        [
            'signatureArguments' => '$result, ?int $row = null',
            'arguments' => '$result, $row',
        ],
    'pg_fetch_array' =>
        [
            'signatureArguments' => '$result, ?int $row = null, int $mode = PGSQL_BOTH',
            'arguments' => '$result, $row, $mode',
        ],
    'pg_fetch_all' =>
        [
            'signatureArguments' => '$result, int $mode = PGSQL_ASSOC',
            'arguments' => '$result, $mode',
        ],
    'pg_fetch_all_columns' =>
        [
            'signatureArguments' => '$result, int $field = 0',
            'arguments' => '$result, $field',
        ],
    'pg_affected_rows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_get_result' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_result_seek' =>
        [
            'signatureArguments' => '$result, int $row',
            'arguments' => '$result, $row',
        ],
    'pg_result_status' =>
        [
            'signatureArguments' => '$result, int $mode = PGSQL_STATUS_LONG',
            'arguments' => '$result, $mode',
        ],
    'pg_free_result' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_last_oid' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_num_rows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_num_fields' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_field_name' =>
        [
            'signatureArguments' => '$result, int $field',
            'arguments' => '$result, $field',
        ],
    'pg_field_num' =>
        [
            'signatureArguments' => '$result, string $field',
            'arguments' => '$result, $field',
        ],
    'pg_field_size' =>
        [
            'signatureArguments' => '$result, int $field',
            'arguments' => '$result, $field',
        ],
    'pg_field_type' =>
        [
            'signatureArguments' => '$result, int $field',
            'arguments' => '$result, $field',
        ],
    'pg_field_type_oid' =>
        [
            'signatureArguments' => '$result, int $field',
            'arguments' => '$result, $field',
        ],
    'pg_field_table' =>
        [
            'signatureArguments' => '$result, int $field, bool $oid_only = false',
            'arguments' => '$result, $field, $oid_only',
        ],
    'pg_result_error' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_last_error' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_last_notice' =>
        [
            'signatureArguments' => '$connection, int $mode = PGSQL_NOTICE_LAST',
            'arguments' => '$connection, $mode',
        ],
    'pg_end_copy' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_untrace' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_lo_create' =>
        [
            'signatureArguments' => '$connection, $oid',
            'arguments' => '$connection, $oid',
        ],
    'pg_lo_close' =>
        [
            'signatureArguments' => '$lob',
            'arguments' => '$lob',
        ],
    'pg_lo_read' =>
        [
            'signatureArguments' => '$lob, int $length = 8192',
            'arguments' => '$lob, $length',
        ],
    'pg_lo_write' =>
        [
            'signatureArguments' => '$lob, string $data, ?int $length = null',
            'arguments' => '$lob, $data, $length',
        ],
    'pg_lo_read_all' =>
        [
            'signatureArguments' => '$lob',
            'arguments' => '$lob',
        ],
    'pg_lo_seek' =>
        [
            'signatureArguments' => '$lob, int $offset, int $whence = PGSQL_SEEK_CUR',
            'arguments' => '$lob, $offset, $whence',
        ],
    'pg_lo_tell' =>
        [
            'signatureArguments' => '$lob',
            'arguments' => '$lob',
        ],
    'pg_unescape_bytea' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'pg_client_encoding' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'pg_getlastoid' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_cmdtuples' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_errormessage' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_numrows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_numfields' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_fieldname' =>
        [
            'signatureArguments' => '$result, int $field',
            'arguments' => '$result, $field',
        ],
    'pg_fieldsize' =>
        [
            'signatureArguments' => '$result, int $field',
            'arguments' => '$result, $field',
        ],
    'pg_fieldtype' =>
        [
            'signatureArguments' => '$result, int $field',
            'arguments' => '$result, $field',
        ],
    'pg_fieldnum' =>
        [
            'signatureArguments' => '$result, string $field',
            'arguments' => '$result, $field',
        ],
    'pg_freeresult' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'pg_loreadall' =>
        [
            'signatureArguments' => '$lob',
            'arguments' => '$lob',
        ],
    'pg_locreate' =>
        [
            'signatureArguments' => '$connection, $oid',
            'arguments' => '$connection, $oid',
        ],
    'pg_loclose' =>
        [
            'signatureArguments' => '$lob',
            'arguments' => '$lob',
        ],
    'pg_loread' =>
        [
            'signatureArguments' => '$lob, int $length = 8192',
            'arguments' => '$lob, $length',
        ],
    'pg_lowrite' =>
        [
            'signatureArguments' => '$lob, string $data, ?int $length',
            'arguments' => '$lob, $data, $length',
        ],
    'pg_clientencoding' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_consume_input' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_flush' =>
        [
            'signatureArguments' => '$connection',
            'arguments' => '$connection',
        ],
    'pg_set_error_context_visibility' =>
        [
            'signatureArguments' => 'PgSql\\Connection $connection, int $visibility',
            'arguments' => '$connection, $visibility',
        ],
    'pg_pipeline_status' =>
        [
            'signatureArguments' => 'PgSql\\Connection $connection',
            'arguments' => '$connection',
        ],
    'pg_pipeline_sync' =>
        [
            'signatureArguments' => 'PgSql\\Connection $connection',
            'arguments' => '$connection',
        ],
    'pg_exit_pipeline_mode' =>
        [
            'signatureArguments' => 'PgSql\\Connection $connection',
            'arguments' => '$connection',
        ],
    'pg_enter_pipeline_mode' =>
        [
            'signatureArguments' => 'PgSql\\Connection $connection',
            'arguments' => '$connection',
        ],
    'wincache_fcache_fileinfo' =>
        [
            'signatureArguments' => '$summaryonly = false',
            'arguments' => '$summaryonly',
        ],
    'wincache_fcache_meminfo' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wincache_lock' =>
        [
            'signatureArguments' => '$key, $isglobal = false',
            'arguments' => '$key, $isglobal',
        ],
    'wincache_ocache_fileinfo' =>
        [
            'signatureArguments' => '$summaryonly = false',
            'arguments' => '$summaryonly',
        ],
    'wincache_ocache_meminfo' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wincache_refresh_if_changed' =>
        [
            'signatureArguments' => 'array $files',
            'arguments' => '$files',
        ],
    'wincache_rplist_fileinfo' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wincache_rplist_meminfo' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wincache_scache_info' =>
        [
            'signatureArguments' => '$summaryonly = false',
            'arguments' => '$summaryonly',
        ],
    'wincache_scache_meminfo' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wincache_ucache_add' =>
        [
            'signatureArguments' => '$key, $value, $ttl = 0',
            'arguments' => '$key, $value, $ttl',
        ],
    'wincache_ucache_cas' =>
        [
            'signatureArguments' => '$key, $old_value, $new_value',
            'arguments' => '$key, $old_value, $new_value',
        ],
    'wincache_ucache_clear' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wincache_ucache_dec' =>
        [
            'signatureArguments' => '$key, $dec_by = 1, &$success',
            'arguments' => '$key, $dec_by, $success',
        ],
    'wincache_ucache_delete' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'wincache_ucache_exists' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'wincache_ucache_get' =>
        [
            'signatureArguments' => '$key, &$success',
            'arguments' => '$key, $success',
        ],
    'wincache_ucache_inc' =>
        [
            'signatureArguments' => '$key, $inc_by = 1, &$success',
            'arguments' => '$key, $inc_by, $success',
        ],
    'wincache_ucache_info' =>
        [
            'signatureArguments' => 'bool $summaryonly = false, $key = null',
            'arguments' => '$summaryonly, $key',
        ],
    'wincache_ucache_meminfo' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'wincache_ucache_set' =>
        [
            'signatureArguments' => '$key, $value, $ttl = 0',
            'arguments' => '$key, $value, $ttl',
        ],
    'wincache_unlock' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'yaml_emit_file' =>
        [
            'signatureArguments' => '$filename, $data, $encoding = YAML_ANY_ENCODING, $linebreak = YAML_ANY_BREAK, array $callbacks = []',
            'arguments' => '$filename, $data, $encoding, $linebreak, $callbacks',
        ],
    'yaml_emit' =>
        [
            'signatureArguments' => '$data, $encoding = YAML_ANY_ENCODING, $linebreak = YAML_ANY_BREAK, array $callbacks = []',
            'arguments' => '$data, $encoding, $linebreak, $callbacks',
        ],
    'yaml_parse_file' =>
        [
            'signatureArguments' => '$filename, $pos = 0, &$ndocs = null, array $callbacks = []',
            'arguments' => '$filename, $pos, $ndocs, $callbacks',
        ],
    'yaml_parse_url' =>
        [
            'signatureArguments' => '$url, $pos = 0, &$ndocs = null, array $callbacks = []',
            'arguments' => '$url, $pos, $ndocs, $callbacks',
        ],
    'yaml_parse' =>
        [
            'signatureArguments' => '$input, $pos = 0, &$ndocs = null, array $callbacks = []',
            'arguments' => '$input, $pos, $ndocs, $callbacks',
        ],
    'dom_import_simplexml' =>
        [
            'signatureArguments' => 'object $node',
            'arguments' => '$node',
        ],
    'gd_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'imagearc' =>
        [
            'signatureArguments' => 'GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color',
            'arguments' => '$image, $center_x, $center_y, $width, $height, $start_angle, $end_angle, $color',
        ],
    'imageellipse' =>
        [
            'signatureArguments' => 'GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color',
            'arguments' => '$image, $center_x, $center_y, $width, $height, $color',
        ],
    'imagecolorat' =>
        [
            'signatureArguments' => 'GdImage $image, int $x, int $y',
            'arguments' => '$image, $x, $y',
        ],
    'imagecolorallocate' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue',
            'arguments' => '$image, $red, $green, $blue',
        ],
    'imagepalettecopy' =>
        [
            'signatureArguments' => 'GdImage $dst, GdImage $src',
            'arguments' => '$dst, $src',
        ],
    'imagecreatefromstring' =>
        [
            'signatureArguments' => 'string $data',
            'arguments' => '$data',
        ],
    'imagecolorclosest' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue',
            'arguments' => '$image, $red, $green, $blue',
        ],
    'imagecolorclosesthwb' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue',
            'arguments' => '$image, $red, $green, $blue',
        ],
    'imagecolordeallocate' =>
        [
            'signatureArguments' => 'GdImage $image, int $color',
            'arguments' => '$image, $color',
        ],
    'imagecolorresolve' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue',
            'arguments' => '$image, $red, $green, $blue',
        ],
    'imagecolorexact' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue',
            'arguments' => '$image, $red, $green, $blue',
        ],
    'imagecolorset' =>
        [
            'signatureArguments' => 'GdImage $image, int $color, int $red, int $green, int $blue, int $alpha = 0',
            'arguments' => '$image, $color, $red, $green, $blue, $alpha',
        ],
    'imagecolortransparent' =>
        [
            'signatureArguments' => 'GdImage $image, ?int $color = null',
            'arguments' => '$image, $color',
        ],
    'imagecolorstotal' =>
        [
            'signatureArguments' => 'GdImage $image',
            'arguments' => '$image',
        ],
    'imagecolorsforindex' =>
        [
            'signatureArguments' => 'GdImage $image, int $color',
            'arguments' => '$image, $color',
        ],
    'imagecopy' =>
        [
            'signatureArguments' => 'GdImage $dst_image, GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height',
            'arguments' => '$dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $src_width, $src_height',
        ],
    'imagecopymerge' =>
        [
            'signatureArguments' => 'GdImage $dst_image, GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct',
            'arguments' => '$dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $src_width, $src_height, $pct',
        ],
    'imagecopymergegray' =>
        [
            'signatureArguments' => 'GdImage $dst_image, GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct',
            'arguments' => '$dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $src_width, $src_height, $pct',
        ],
    'imagecopyresized' =>
        [
            'signatureArguments' => 'GdImage $dst_image, GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_width, int $dst_height, int $src_width, int $src_height',
            'arguments' => '$dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_width, $dst_height, $src_width, $src_height',
        ],
    'imagecreate' =>
        [
            'signatureArguments' => 'int $width, int $height',
            'arguments' => '$width, $height',
        ],
    'imagecreatetruecolor' =>
        [
            'signatureArguments' => 'int $width, int $height',
            'arguments' => '$width, $height',
        ],
    'imageistruecolor' =>
        [
            'signatureArguments' => 'GdImage $image',
            'arguments' => '$image',
        ],
    'imagetruecolortopalette' =>
        [
            'signatureArguments' => 'GdImage $image, bool $dither, int $num_colors',
            'arguments' => '$image, $dither, $num_colors',
        ],
    'imagesetthickness' =>
        [
            'signatureArguments' => 'GdImage $image, int $thickness',
            'arguments' => '$image, $thickness',
        ],
    'imagefilledarc' =>
        [
            'signatureArguments' => 'GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color, int $style',
            'arguments' => '$image, $center_x, $center_y, $width, $height, $start_angle, $end_angle, $color, $style',
        ],
    'imagefilledellipse' =>
        [
            'signatureArguments' => 'GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color',
            'arguments' => '$image, $center_x, $center_y, $width, $height, $color',
        ],
    'imagealphablending' =>
        [
            'signatureArguments' => 'GdImage $image, bool $enable',
            'arguments' => '$image, $enable',
        ],
    'imagesavealpha' =>
        [
            'signatureArguments' => 'GdImage $image, bool $enable',
            'arguments' => '$image, $enable',
        ],
    'imagecolorallocatealpha' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue, int $alpha',
            'arguments' => '$image, $red, $green, $blue, $alpha',
        ],
    'imagecolorresolvealpha' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue, int $alpha',
            'arguments' => '$image, $red, $green, $blue, $alpha',
        ],
    'imagecolorclosestalpha' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue, int $alpha',
            'arguments' => '$image, $red, $green, $blue, $alpha',
        ],
    'imagecolorexactalpha' =>
        [
            'signatureArguments' => 'GdImage $image, int $red, int $green, int $blue, int $alpha',
            'arguments' => '$image, $red, $green, $blue, $alpha',
        ],
    'imagecopyresampled' =>
        [
            'signatureArguments' => 'GdImage $dst_image, GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_width, int $dst_height, int $src_width, int $src_height',
            'arguments' => '$dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_width, $dst_height, $src_width, $src_height',
        ],
    'imageantialias' =>
        [
            'signatureArguments' => 'GdImage $image, bool $enable',
            'arguments' => '$image, $enable',
        ],
    'imagesettile' =>
        [
            'signatureArguments' => 'GdImage $image, GdImage $tile',
            'arguments' => '$image, $tile',
        ],
    'imagesetbrush' =>
        [
            'signatureArguments' => 'GdImage $image, GdImage $brush',
            'arguments' => '$image, $brush',
        ],
    'imagesetstyle' =>
        [
            'signatureArguments' => 'GdImage $image, array $style',
            'arguments' => '$image, $style',
        ],
    'imagecreatefrompng' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromavif' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromgif' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromjpeg' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromwbmp' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromwebp' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromxbm' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromxpm' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromgd' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromgd2' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagecreatefromgd2part' =>
        [
            'signatureArguments' => 'string $filename, int $x, int $y, int $width, int $height',
            'arguments' => '$filename, $x, $y, $width, $height',
        ],
    'imagepng' =>
        [
            'signatureArguments' => 'GdImage $image, $file = null, int $quality = -1, int $filters = -1',
            'arguments' => '$image, $file, $quality, $filters',
        ],
    'imagewebp' =>
        [
            'signatureArguments' => 'GdImage $image, $file = null, int $quality = -1',
            'arguments' => '$image, $file, $quality',
        ],
    'imagegif' =>
        [
            'signatureArguments' => 'GdImage $image, $file = null',
            'arguments' => '$image, $file',
        ],
    'imagejpeg' =>
        [
            'signatureArguments' => 'GdImage $image, $file = null, int $quality = -1',
            'arguments' => '$image, $file, $quality',
        ],
    'imagewbmp' =>
        [
            'signatureArguments' => 'GdImage $image, $file = null, ?int $foreground_color = null',
            'arguments' => '$image, $file, $foreground_color',
        ],
    'imagegd' =>
        [
            'signatureArguments' => 'GdImage $image, ?string $file = null',
            'arguments' => '$image, $file',
        ],
    'imagegd2' =>
        [
            'signatureArguments' => 'GdImage $image, ?string $file = null, int $chunk_size = 128, int $mode = IMG_GD2_RAW',
            'arguments' => '$image, $file, $chunk_size, $mode',
        ],
    'imagedestroy' =>
        [
            'signatureArguments' => 'GdImage $image',
            'arguments' => '$image',
        ],
    'imagegammacorrect' =>
        [
            'signatureArguments' => 'GdImage $image, float $input_gamma, float $output_gamma',
            'arguments' => '$image, $input_gamma, $output_gamma',
        ],
    'imagefill' =>
        [
            'signatureArguments' => 'GdImage $image, int $x, int $y, int $color',
            'arguments' => '$image, $x, $y, $color',
        ],
    'imagefilledrectangle' =>
        [
            'signatureArguments' => 'GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color',
            'arguments' => '$image, $x1, $y1, $x2, $y2, $color',
        ],
    'imagefilltoborder' =>
        [
            'signatureArguments' => 'GdImage $image, int $x, int $y, int $border_color, int $color',
            'arguments' => '$image, $x, $y, $border_color, $color',
        ],
    'imagefontwidth' =>
        [
            'signatureArguments' => '$font',
            'arguments' => '$font',
        ],
    'imagefontheight' =>
        [
            'signatureArguments' => '$font',
            'arguments' => '$font',
        ],
    'imageinterlace' =>
        [
            'signatureArguments' => 'GdImage $image, ?bool $enable = null',
            'arguments' => '$image, $enable',
        ],
    'imageline' =>
        [
            'signatureArguments' => 'GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color',
            'arguments' => '$image, $x1, $y1, $x2, $y2, $color',
        ],
    'imageloadfont' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagerectangle' =>
        [
            'signatureArguments' => 'GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color',
            'arguments' => '$image, $x1, $y1, $x2, $y2, $color',
        ],
    'imagesetpixel' =>
        [
            'signatureArguments' => 'GdImage $image, int $x, int $y, int $color',
            'arguments' => '$image, $x, $y, $color',
        ],
    'imagesx' =>
        [
            'signatureArguments' => 'GdImage $image',
            'arguments' => '$image',
        ],
    'imagesy' =>
        [
            'signatureArguments' => 'GdImage $image',
            'arguments' => '$image',
        ],
    'imagedashedline' =>
        [
            'signatureArguments' => 'GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color',
            'arguments' => '$image, $x1, $y1, $x2, $y2, $color',
        ],
    'imagettfbbox' =>
        [
            'signatureArguments' => 'float $size, float $angle, string $font_filename, string $string, array $options = []',
            'arguments' => '$size, $angle, $font_filename, $string, $options',
        ],
    'imagettftext' =>
        [
            'signatureArguments' => 'GdImage $image, float $size, float $angle, int $x, int $y, int $color, string $font_filename, string $text, array $options = []',
            'arguments' => '$image, $size, $angle, $x, $y, $color, $font_filename, $text, $options',
        ],
    'imageftbbox' =>
        [
            'signatureArguments' => 'float $size, float $angle, string $font_filename, string $string, array $options = []',
            'arguments' => '$size, $angle, $font_filename, $string, $options',
        ],
    'imagefttext' =>
        [
            'signatureArguments' => 'GdImage $image, float $size, float $angle, int $x, int $y, int $color, string $font_filename, string $text, array $options = []',
            'arguments' => '$image, $size, $angle, $x, $y, $color, $font_filename, $text, $options',
        ],
    'imagepsloadfont' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'imagepsfreefont' =>
        [
            'signatureArguments' => '$font_index',
            'arguments' => '$font_index',
        ],
    'imagepsencodefont' =>
        [
            'signatureArguments' => '$font_index, $encodingfile',
            'arguments' => '$font_index, $encodingfile',
        ],
    'imagepsextendfont' =>
        [
            'signatureArguments' => '$font_index, $extend',
            'arguments' => '$font_index, $extend',
        ],
    'imagepsslantfont' =>
        [
            'signatureArguments' => '$font_index, $slant',
            'arguments' => '$font_index, $slant',
        ],
    'imagepstext' =>
        [
            'signatureArguments' => '$image, $text, $font_index, $size, $foreground, $background, $x, $y, $space = null, $tightness = null, $angle = null, $antialias_steps = null',
            'arguments' => '$image, $text, $font_index, $size, $foreground, $background, $x, $y, $space, $tightness, $angle, $antialias_steps',
        ],
    'imagepsbbox' =>
        [
            'signatureArguments' => '$text, $font, $size',
            'arguments' => '$text, $font, $size',
        ],
    'imagetypes' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'jpeg2wbmp' =>
        [
            'signatureArguments' => '$jpegname, $wbmpname, $dest_height, $dest_width, $threshold',
            'arguments' => '$jpegname, $wbmpname, $dest_height, $dest_width, $threshold',
        ],
    'png2wbmp' =>
        [
            'signatureArguments' => '$pngname, $wbmpname, $dest_height, $dest_width, $threshold',
            'arguments' => '$pngname, $wbmpname, $dest_height, $dest_width, $threshold',
        ],
    'image2wbmp' =>
        [
            'signatureArguments' => '$image, $filename = null, $threshold = null',
            'arguments' => '$image, $filename, $threshold',
        ],
    'imagelayereffect' =>
        [
            'signatureArguments' => 'GdImage $image, int $effect',
            'arguments' => '$image, $effect',
        ],
    'imagecolormatch' =>
        [
            'signatureArguments' => 'GdImage $image1, GdImage $image2',
            'arguments' => '$image1, $image2',
        ],
    'imagexbm' =>
        [
            'signatureArguments' => 'GdImage $image, ?string $filename, ?int $foreground_color = null',
            'arguments' => '$image, $filename, $foreground_color',
        ],
    'imageconvolution' =>
        [
            'signatureArguments' => 'GdImage $image, array $matrix, float $divisor, float $offset',
            'arguments' => '$image, $matrix, $divisor, $offset',
        ],
    'imageresolution' =>
        [
            'signatureArguments' => 'GdImage $image, ?int $resolution_x = null, ?int $resolution_y = null',
            'arguments' => '$image, $resolution_x, $resolution_y',
        ],
    'imagesetclip' =>
        [
            'signatureArguments' => 'GdImage $image, int $x1, int $y1, int $x2, int $y2',
            'arguments' => '$image, $x1, $y1, $x2, $y2',
        ],
    'imagegetclip' =>
        [
            'signatureArguments' => 'GdImage $image',
            'arguments' => '$image',
        ],
    'imagecreatefrombmp' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagebmp' =>
        [
            'signatureArguments' => 'GdImage $image, $file = null, bool $compressed = true',
            'arguments' => '$image, $file, $compressed',
        ],
    'imagecreatefromtga' =>
        [
            'signatureArguments' => 'string $filename',
            'arguments' => '$filename',
        ],
    'imagegrabscreen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'imagegrabwindow' =>
        [
            'signatureArguments' => '$handle, $client_area = null',
            'arguments' => '$handle, $client_area',
        ],
    'imagegetinterpolation' =>
        [
            'signatureArguments' => 'GdImage $image',
            'arguments' => '$image',
        ],
    'imageavif' =>
        [
            'signatureArguments' => 'GdImage $image, string|null $file = null, int $quality = -1, int $speed = -1',
            'arguments' => '$image, $file, $quality, $speed',
        ],
    'imageaffine' =>
        [
            'signatureArguments' => 'GdImage $image, array $affine, ?array $clip = null',
            'arguments' => '$image, $affine, $clip',
        ],
    'imageaffinematrixconcat' =>
        [
            'signatureArguments' => 'array $matrix1, array $matrix2',
            'arguments' => '$matrix1, $matrix2',
        ],
    'imagecrop' =>
        [
            'signatureArguments' => 'GdImage $image, array $rectangle',
            'arguments' => '$image, $rectangle',
        ],
    'imagecropauto' =>
        [
            'signatureArguments' => 'GdImage $image, int $mode = IMG_CROP_DEFAULT, float $threshold = .5, int $color = -1',
            'arguments' => '$image, $mode, $threshold, $color',
        ],
    'imageflip' =>
        [
            'signatureArguments' => 'GdImage $image, int $mode',
            'arguments' => '$image, $mode',
        ],
    'imagepalettetotruecolor' =>
        [
            'signatureArguments' => 'GdImage $image',
            'arguments' => '$image',
        ],
    'imagescale' =>
        [
            'signatureArguments' => 'GdImage $image, int $width, int $height = -1, int $mode = IMG_BILINEAR_FIXED',
            'arguments' => '$image, $width, $height, $mode',
        ],
    'imagesetinterpolation' =>
        [
            'signatureArguments' => 'GdImage $image, int $method = IMG_BILINEAR_FIXED',
            'arguments' => '$image, $method',
        ],
    'event_base_new' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'event_base_free' =>
        [
            'signatureArguments' => '$event_base',
            'arguments' => '$event_base',
        ],
    'event_base_loop' =>
        [
            'signatureArguments' => '$event_base, $flags = null',
            'arguments' => '$event_base, $flags',
        ],
    'event_base_loopbreak' =>
        [
            'signatureArguments' => '$event_base',
            'arguments' => '$event_base',
        ],
    'event_base_loopexit' =>
        [
            'signatureArguments' => '$event_base, $timeout = -1',
            'arguments' => '$event_base, $timeout',
        ],
    'event_base_set' =>
        [
            'signatureArguments' => '$event, $base',
            'arguments' => '$event, $base',
        ],
    'event_base_priority_init' =>
        [
            'signatureArguments' => '$event_base, $npriorities',
            'arguments' => '$event_base, $npriorities',
        ],
    'event_new' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'event_free' =>
        [
            'signatureArguments' => '$event',
            'arguments' => '$event',
        ],
    'event_add' =>
        [
            'signatureArguments' => '$event, $timeout = -1',
            'arguments' => '$event, $timeout',
        ],
    'event_set' =>
        [
            'signatureArguments' => '$event, $fd, $events, $callback, $arg = null',
            'arguments' => '$event, $fd, $events, $callback, $arg',
        ],
    'event_del' =>
        [
            'signatureArguments' => '$event',
            'arguments' => '$event',
        ],
    'event_buffer_new' =>
        [
            'signatureArguments' => '$stream, $readcb, $writecb, $errorcb, $arg = null',
            'arguments' => '$stream, $readcb, $writecb, $errorcb, $arg',
        ],
    'event_buffer_free' =>
        [
            'signatureArguments' => '$bevent',
            'arguments' => '$bevent',
        ],
    'event_buffer_base_set' =>
        [
            'signatureArguments' => '$bevent, $event_base',
            'arguments' => '$bevent, $event_base',
        ],
    'event_buffer_priority_set' =>
        [
            'signatureArguments' => '$bevent, $priority',
            'arguments' => '$bevent, $priority',
        ],
    'event_buffer_write' =>
        [
            'signatureArguments' => '$bevent, $data, $data_size = -1',
            'arguments' => '$bevent, $data, $data_size',
        ],
    'event_buffer_read' =>
        [
            'signatureArguments' => '$bevent, $data_size',
            'arguments' => '$bevent, $data_size',
        ],
    'event_buffer_enable' =>
        [
            'signatureArguments' => '$bevent, $events',
            'arguments' => '$bevent, $events',
        ],
    'event_buffer_disable' =>
        [
            'signatureArguments' => '$bevent, $events',
            'arguments' => '$bevent, $events',
        ],
    'event_buffer_timeout_set' =>
        [
            'signatureArguments' => '$bevent, $read_timeout, $write_timeout',
            'arguments' => '$bevent, $read_timeout, $write_timeout',
        ],
    'event_buffer_watermark_set' =>
        [
            'signatureArguments' => '$bevent, $events, $lowmark, $highmark',
            'arguments' => '$bevent, $events, $lowmark, $highmark',
        ],
    'event_buffer_fd_set' =>
        [
            'signatureArguments' => '$bevent, $fd',
            'arguments' => '$bevent, $fd',
        ],
    'event_buffer_set_callback' =>
        [
            'signatureArguments' => '$bevent, $readcb, $writecb, $errorcb, $arg = null',
            'arguments' => '$bevent, $readcb, $writecb, $errorcb, $arg',
        ],
    'event_timer_new' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'event_timer_set' =>
        [
            'signatureArguments' => '$event, $callback, $arg = null',
            'arguments' => '$event, $callback, $arg',
        ],
    'event_timer_pending' =>
        [
            'signatureArguments' => '$event, $timeout = -1',
            'arguments' => '$event, $timeout',
        ],
    'event_timer_add' =>
        [
            'signatureArguments' => '$event, $timeout = -1',
            'arguments' => '$event, $timeout',
        ],
    'event_timer_del' =>
        [
            'signatureArguments' => '$event',
            'arguments' => '$event',
        ],
    'newrelic_add_custom_parameter' =>
        [
            'signatureArguments' => 'string $key, bool|float|int|string $value',
            'arguments' => '$key, $value',
        ],
    'newrelic_add_custom_tracer' =>
        [
            'signatureArguments' => 'string $functionName',
            'arguments' => '$functionName',
        ],
    'newrelic_background_job' =>
        [
            'signatureArguments' => 'bool $flag = true',
            'arguments' => '$flag',
        ],
    'newrelic_capture_params' =>
        [
            'signatureArguments' => 'bool $enable_flag = true',
            'arguments' => '$enable_flag',
        ],
    'newrelic_custom_metric' =>
        [
            'signatureArguments' => 'string $metric_name, float $value',
            'arguments' => '$metric_name, $value',
        ],
    'newrelic_disable_autorum' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'newrelic_enable_params' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'newrelic_end_of_transaction' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'newrelic_end_transaction' =>
        [
            'signatureArguments' => 'bool $ignore = false',
            'arguments' => '$ignore',
        ],
    'newrelic_get_browser_timing_footer' =>
        [
            'signatureArguments' => 'bool $includeTags = true',
            'arguments' => '$includeTags',
        ],
    'newrelic_get_browser_timing_header' =>
        [
            'signatureArguments' => 'bool $includeTags = true',
            'arguments' => '$includeTags',
        ],
    'newrelic_ignore_apdex' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'newrelic_ignore_transaction' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'newrelic_name_transaction' =>
        [
            'signatureArguments' => 'string $name',
            'arguments' => '$name',
        ],
    'newrelic_record_custom_event' =>
        [
            'signatureArguments' => 'string $name, array $attributes',
            'arguments' => '$name, $attributes',
        ],
    'newrelic_set_appname' =>
        [
            'signatureArguments' => 'string $name, string $license, bool $xmit = false',
            'arguments' => '$name, $license, $xmit',
        ],
    'newrelic_set_user_attributes' =>
        [
            'signatureArguments' => 'string $user_value, string $account_value, string $product_value',
            'arguments' => '$user_value, $account_value, $product_value',
        ],
    'newrelic_start_transaction' =>
        [
            'signatureArguments' => 'string $appname, string $license = null',
            'arguments' => '$appname, $license',
        ],
    'newrelic_record_datastore_segment' =>
        [
            'signatureArguments' => 'callable $func, array $parameters',
            'arguments' => '$func, $parameters',
        ],
    'newrelic_accept_distributed_trace_headers' =>
        [
            'signatureArguments' => 'array $headers, string $transport_type = \'HTTP\'',
            'arguments' => '$headers, $transport_type',
        ],
    'newrelic_accept_distributed_trace_payload' =>
        [
            'signatureArguments' => 'string $payload',
            'arguments' => '$payload',
        ],
    'newrelic_add_custom_span_parameter' =>
        [
            'signatureArguments' => 'string $key, bool|float|int|string $value',
            'arguments' => '$key, $value',
        ],
    'newrelic_create_distributed_trace_payload' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'newrelic_get_linking_metadata' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'newrelic_get_trace_metadata' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'newrelic_insert_distributed_trace_headers' =>
        [
            'signatureArguments' => 'array $headers',
            'arguments' => '$headers',
        ],
    'newrelic_is_sampled' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'preg_match' =>
        [
            'signatureArguments' => 'string $pattern, string $subject, &$matches, int $flags = 0, int $offset = 0',
            'arguments' => '$pattern, $subject, $matches, $flags, $offset',
        ],
    'preg_match_all' =>
        [
            'signatureArguments' => 'string $pattern, string $subject, &$matches, int $flags = 0, int $offset = 0',
            'arguments' => '$pattern, $subject, $matches, $flags, $offset',
        ],
    'preg_replace' =>
        [
            'signatureArguments' => 'array|string $pattern, array|string $replacement, array|string $subject, int $limit = -1, &$count',
            'arguments' => '$pattern, $replacement, $subject, $limit, $count',
        ],
    'preg_filter' =>
        [
            'signatureArguments' => 'array|string $pattern, array|string $replacement, array|string $subject, int $limit = -1, &$count',
            'arguments' => '$pattern, $replacement, $subject, $limit, $count',
        ],
    'preg_split' =>
        [
            'signatureArguments' => 'string $pattern, string $subject, int $limit = -1, int $flags = 0',
            'arguments' => '$pattern, $subject, $limit, $flags',
        ],
    'preg_quote' =>
        [
            'signatureArguments' => 'string $str, ?string $delimiter = null',
            'arguments' => '$str, $delimiter',
        ],
    'preg_grep' =>
        [
            'signatureArguments' => 'string $pattern, array $array, int $flags = 0',
            'arguments' => '$pattern, $array, $flags',
        ],
    'preg_last_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'preg_last_error_msg' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_core_ristretto255_add' =>
        [
            'signatureArguments' => 'string $p, string $q',
            'arguments' => '$p, $q',
        ],
    'sodium_crypto_core_ristretto255_from_hash' =>
        [
            'signatureArguments' => 'string $s',
            'arguments' => '$s',
        ],
    'sodium_crypto_core_ristretto255_is_valid_point' =>
        [
            'signatureArguments' => 'string $s',
            'arguments' => '$s',
        ],
    'sodium_crypto_core_ristretto255_random' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_core_ristretto255_scalar_add' =>
        [
            'signatureArguments' => 'string $x, string $y',
            'arguments' => '$x, $y',
        ],
    'sodium_crypto_core_ristretto255_scalar_complement' =>
        [
            'signatureArguments' => 'string $s',
            'arguments' => '$s',
        ],
    'sodium_crypto_core_ristretto255_scalar_invert' =>
        [
            'signatureArguments' => 'string $s',
            'arguments' => '$s',
        ],
    'sodium_crypto_core_ristretto255_scalar_mul' =>
        [
            'signatureArguments' => 'string $x, string $y',
            'arguments' => '$x, $y',
        ],
    'sodium_crypto_core_ristretto255_scalar_negate' =>
        [
            'signatureArguments' => 'string $s',
            'arguments' => '$s',
        ],
    'sodium_crypto_core_ristretto255_scalar_reduce' =>
        [
            'signatureArguments' => 'string $s',
            'arguments' => '$s',
        ],
    'sodium_crypto_core_ristretto255_scalar_sub' =>
        [
            'signatureArguments' => 'string $x, string $y',
            'arguments' => '$x, $y',
        ],
    'sodium_crypto_core_ristretto255_scalar_random' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_core_ristretto255_sub' =>
        [
            'signatureArguments' => 'string $p, string $q',
            'arguments' => '$p, $q',
        ],
    'sodium_crypto_scalarmult_ristretto255' =>
        [
            'signatureArguments' => 'string $n, string $p',
            'arguments' => '$n, $p',
        ],
    'sodium_crypto_scalarmult_ristretto255_base' =>
        [
            'signatureArguments' => 'string $n',
            'arguments' => '$n',
        ],
    'sodium_crypto_stream_xchacha20' =>
        [
            'signatureArguments' => 'int $length, string $nonce, string $key',
            'arguments' => '$length, $nonce, $key',
        ],
    'sodium_crypto_stream_xchacha20_xor' =>
        [
            'signatureArguments' => 'string $message, string $nonce, string $key',
            'arguments' => '$message, $nonce, $key',
        ],
    'sodium_crypto_stream_xchacha20_xor_ic' =>
        [
            'signatureArguments' => 'string $message, string $nonce, int $counter, string $key',
            'arguments' => '$message, $nonce, $counter, $key',
        ],
    'sodium_crypto_stream_xchacha20_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_aead_aes256gcm_is_available' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_aead_aes256gcm_decrypt' =>
        [
            'signatureArguments' => 'string $ciphertext, string $additional_data, string $nonce, string $key',
            'arguments' => '$ciphertext, $additional_data, $nonce, $key',
        ],
    'sodium_crypto_aead_aes256gcm_encrypt' =>
        [
            'signatureArguments' => 'string $message, string $additional_data, string $nonce, string $key',
            'arguments' => '$message, $additional_data, $nonce, $key',
        ],
    'sodium_crypto_aead_chacha20poly1305_decrypt' =>
        [
            'signatureArguments' => 'string $ciphertext, string $additional_data, string $nonce, string $key',
            'arguments' => '$ciphertext, $additional_data, $nonce, $key',
        ],
    'sodium_crypto_aead_chacha20poly1305_encrypt' =>
        [
            'signatureArguments' => 'string $message, string $additional_data, string $nonce, string $key',
            'arguments' => '$message, $additional_data, $nonce, $key',
        ],
    'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' =>
        [
            'signatureArguments' => 'string $ciphertext, string $additional_data, string $nonce, string $key',
            'arguments' => '$ciphertext, $additional_data, $nonce, $key',
        ],
    'sodium_crypto_auth_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_kx_keypair' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_kx_publickey' =>
        [
            'signatureArguments' => 'string $key_pair',
            'arguments' => '$key_pair',
        ],
    'sodium_crypto_kx_secretkey' =>
        [
            'signatureArguments' => 'string $key_pair',
            'arguments' => '$key_pair',
        ],
    'sodium_crypto_kx_seed_keypair' =>
        [
            'signatureArguments' => 'string $seed',
            'arguments' => '$seed',
        ],
    'sodium_crypto_kx_server_session_keys' =>
        [
            'signatureArguments' => 'string $server_key_pair, string $client_key',
            'arguments' => '$server_key_pair, $client_key',
        ],
    'sodium_crypto_generichash_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_kx_client_session_keys' =>
        [
            'signatureArguments' => 'string $client_key_pair, string $server_key',
            'arguments' => '$client_key_pair, $server_key',
        ],
    'sodium_crypto_kdf_derive_from_key' =>
        [
            'signatureArguments' => 'int $subkey_length, int $subkey_id, string $context, string $key',
            'arguments' => '$subkey_length, $subkey_id, $context, $key',
        ],
    'sodium_crypto_kdf_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_shorthash_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_stream_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_pad' =>
        [
            'signatureArguments' => 'string $string, int $block_size',
            'arguments' => '$string, $block_size',
        ],
    'sodium_unpad' =>
        [
            'signatureArguments' => 'string $string, int $block_size',
            'arguments' => '$string, $block_size',
        ],
    'sodium_crypto_auth_verify' =>
        [
            'signatureArguments' => 'string $mac, string $message, string $key',
            'arguments' => '$mac, $message, $key',
        ],
    'sodium_crypto_box' =>
        [
            'signatureArguments' => 'string $message, string $nonce, string $key_pair',
            'arguments' => '$message, $nonce, $key_pair',
        ],
    'sodium_crypto_box_keypair' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_box_seed_keypair' =>
        [
            'signatureArguments' => 'string $seed',
            'arguments' => '$seed',
        ],
    'sodium_crypto_box_keypair_from_secretkey_and_publickey' =>
        [
            'signatureArguments' => 'string $secret_key, string $public_key',
            'arguments' => '$secret_key, $public_key',
        ],
    'sodium_crypto_box_open' =>
        [
            'signatureArguments' => 'string $ciphertext, string $nonce, string $key_pair',
            'arguments' => '$ciphertext, $nonce, $key_pair',
        ],
    'sodium_crypto_box_publickey' =>
        [
            'signatureArguments' => 'string $key_pair',
            'arguments' => '$key_pair',
        ],
    'sodium_crypto_box_publickey_from_secretkey' =>
        [
            'signatureArguments' => 'string $secret_key',
            'arguments' => '$secret_key',
        ],
    'sodium_crypto_box_seal' =>
        [
            'signatureArguments' => 'string $message, string $public_key',
            'arguments' => '$message, $public_key',
        ],
    'sodium_crypto_box_seal_open' =>
        [
            'signatureArguments' => 'string $ciphertext, string $key_pair',
            'arguments' => '$ciphertext, $key_pair',
        ],
    'sodium_crypto_box_secretkey' =>
        [
            'signatureArguments' => 'string $key_pair',
            'arguments' => '$key_pair',
        ],
    'sodium_crypto_generichash' =>
        [
            'signatureArguments' => 'string $message, string $key = \'\', int $length = 32',
            'arguments' => '$message, $key, $length',
        ],
    'sodium_crypto_generichash_update' =>
        [
            'signatureArguments' => 'string &$state, string $message',
            'arguments' => '$state, $message',
        ],
    'sodium_crypto_pwhash' =>
        [
            'signatureArguments' => 'int $length, string $password, string $salt, int $opslimit, int $memlimit, int $algo = SODIUM_CRYPTO_PWHASH_ALG_DEFAULT',
            'arguments' => '$length, $password, $salt, $opslimit, $memlimit, $algo',
        ],
    'sodium_crypto_pwhash_str' =>
        [
            'signatureArguments' => 'string $password, int $opslimit, int $memlimit',
            'arguments' => '$password, $opslimit, $memlimit',
        ],
    'sodium_crypto_pwhash_str_verify' =>
        [
            'signatureArguments' => 'string $hash, string $password',
            'arguments' => '$hash, $password',
        ],
    'sodium_crypto_pwhash_scryptsalsa208sha256_str' =>
        [
            'signatureArguments' => 'string $password, int $opslimit, int $memlimit',
            'arguments' => '$password, $opslimit, $memlimit',
        ],
    'sodium_crypto_pwhash_scryptsalsa208sha256_str_verify' =>
        [
            'signatureArguments' => 'string $hash, string $password',
            'arguments' => '$hash, $password',
        ],
    'sodium_crypto_scalarmult' =>
        [
            'signatureArguments' => 'string $n, string $p',
            'arguments' => '$n, $p',
        ],
    'sodium_crypto_secretbox' =>
        [
            'signatureArguments' => 'string $message, string $nonce, string $key',
            'arguments' => '$message, $nonce, $key',
        ],
    'sodium_crypto_secretbox_open' =>
        [
            'signatureArguments' => 'string $ciphertext, string $nonce, string $key',
            'arguments' => '$ciphertext, $nonce, $key',
        ],
    'sodium_crypto_shorthash' =>
        [
            'signatureArguments' => 'string $message, string $key',
            'arguments' => '$message, $key',
        ],
    'sodium_crypto_sign' =>
        [
            'signatureArguments' => 'string $message, string $secret_key',
            'arguments' => '$message, $secret_key',
        ],
    'sodium_crypto_sign_detached' =>
        [
            'signatureArguments' => 'string $message, string $secret_key',
            'arguments' => '$message, $secret_key',
        ],
    'sodium_crypto_sign_ed25519_pk_to_curve25519' =>
        [
            'signatureArguments' => 'string $public_key',
            'arguments' => '$public_key',
        ],
    'sodium_crypto_sign_ed25519_sk_to_curve25519' =>
        [
            'signatureArguments' => 'string $secret_key',
            'arguments' => '$secret_key',
        ],
    'sodium_crypto_sign_keypair' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_sign_open' =>
        [
            'signatureArguments' => 'string $signed_message, string $public_key',
            'arguments' => '$signed_message, $public_key',
        ],
    'sodium_crypto_sign_publickey' =>
        [
            'signatureArguments' => 'string $key_pair',
            'arguments' => '$key_pair',
        ],
    'sodium_crypto_sign_secretkey' =>
        [
            'signatureArguments' => 'string $key_pair',
            'arguments' => '$key_pair',
        ],
    'sodium_crypto_sign_publickey_from_secretkey' =>
        [
            'signatureArguments' => 'string $secret_key',
            'arguments' => '$secret_key',
        ],
    'sodium_crypto_sign_seed_keypair' =>
        [
            'signatureArguments' => 'string $seed',
            'arguments' => '$seed',
        ],
    'sodium_crypto_sign_verify_detached' =>
        [
            'signatureArguments' => 'string $signature, string $message, string $public_key',
            'arguments' => '$signature, $message, $public_key',
        ],
    'sodium_randombytes_buf' =>
        [
            'signatureArguments' => 'int $length',
            'arguments' => '$length',
        ],
    'sodium_randombytes_random16' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_randombytes_uniform' =>
        [
            'signatureArguments' => 'int $upperBoundNonInclusive',
            'arguments' => '$upperBoundNonInclusive',
        ],
    'sodium_bin2hex' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'sodium_compare' =>
        [
            'signatureArguments' => 'string $string1, string $string2',
            'arguments' => '$string1, $string2',
        ],
    'sodium_hex2bin' =>
        [
            'signatureArguments' => 'string $string, string $ignore = \'\'',
            'arguments' => '$string, $ignore',
        ],
    'sodium_increment' =>
        [
            'signatureArguments' => 'string &$string',
            'arguments' => '$string',
        ],
    'sodium_add' =>
        [
            'signatureArguments' => 'string &$string1, string $string2',
            'arguments' => '$string1, $string2',
        ],
    'sodium_library_version_major' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_library_version_minor' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_memcmp' =>
        [
            'signatureArguments' => 'string $string1, string $string2',
            'arguments' => '$string1, $string2',
        ],
    'sodium_memzero' =>
        [
            'signatureArguments' => 'string &$string',
            'arguments' => '$string',
        ],
    'sodium_version_string' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_secretbox_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_aead_aes256gcm_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_aead_chacha20poly1305_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_aead_chacha20poly1305_ietf_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_aead_xchacha20poly1305_ietf_decrypt' =>
        [
            'signatureArguments' => 'string $ciphertext, string $additional_data, string $nonce, string $key',
            'arguments' => '$ciphertext, $additional_data, $nonce, $key',
        ],
    'sodium_crypto_aead_xchacha20poly1305_ietf_encrypt' =>
        [
            'signatureArguments' => 'string $message, string $additional_data, string $nonce, string $key',
            'arguments' => '$message, $additional_data, $nonce, $key',
        ],
    'sodium_crypto_aead_xchacha20poly1305_ietf_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_pwhash_str_needs_rehash' =>
        [
            'signatureArguments' => 'string $password, int $opslimit, int $memlimit',
            'arguments' => '$password, $opslimit, $memlimit',
        ],
    'sodium_crypto_secretstream_xchacha20poly1305_keygen' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'sodium_crypto_secretstream_xchacha20poly1305_init_push' =>
        [
            'signatureArguments' => 'string $key',
            'arguments' => '$key',
        ],
    'sodium_crypto_secretstream_xchacha20poly1305_push' =>
        [
            'signatureArguments' => 'string &$state, string $message, string $additional_data = "", int $tag = SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE',
            'arguments' => '$state, $message, $additional_data, $tag',
        ],
    'sodium_crypto_secretstream_xchacha20poly1305_init_pull' =>
        [
            'signatureArguments' => 'string $header, string $key',
            'arguments' => '$header, $key',
        ],
    'sodium_crypto_secretstream_xchacha20poly1305_pull' =>
        [
            'signatureArguments' => 'string &$state, string $ciphertext, string $additional_data = ""',
            'arguments' => '$state, $ciphertext, $additional_data',
        ],
    'sodium_crypto_secretstream_xchacha20poly1305_rekey' =>
        [
            'signatureArguments' => 'string &$state',
            'arguments' => '$state',
        ],
    'sodium_bin2base64' =>
        [
            'signatureArguments' => 'string $string, int $id',
            'arguments' => '$string, $id',
        ],
    'sodium_base642bin' =>
        [
            'signatureArguments' => 'string $string, int $id, string $ignore = \'\'',
            'arguments' => '$string, $id, $ignore',
        ],
    'fann_cascadetrain_on_data' =>
        [
            'signatureArguments' => '$ann, $data, $max_neurons, $neurons_between_reports, $desired_error',
            'arguments' => '$ann, $data, $max_neurons, $neurons_between_reports, $desired_error',
        ],
    'fann_cascadetrain_on_file' =>
        [
            'signatureArguments' => '$ann, $filename, $max_neurons, $neurons_between_reports, $desired_error',
            'arguments' => '$ann, $filename, $max_neurons, $neurons_between_reports, $desired_error',
        ],
    'fann_clear_scaling_params' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_copy' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_create_from_file' =>
        [
            'signatureArguments' => '$configuration_file',
            'arguments' => '$configuration_file',
        ],
    'fann_create_shortcut_array' =>
        [
            'signatureArguments' => '$num_layers, $layers',
            'arguments' => '$num_layers, $layers',
        ],
    'fann_create_shortcut' =>
        [
            'signatureArguments' => '$num_layers, $num_neurons1, $num_neurons2, ...$_',
            'arguments' => '$num_layers, $num_neurons1, $num_neurons2, $_',
        ],
    'fann_create_sparse_array' =>
        [
            'signatureArguments' => '$connection_rate, $num_layers, $layers',
            'arguments' => '$connection_rate, $num_layers, $layers',
        ],
    'fann_create_sparse' =>
        [
            'signatureArguments' => '$connection_rate, $num_layers, $num_neurons1, $num_neurons2, ...$_',
            'arguments' => '$connection_rate, $num_layers, $num_neurons1, $num_neurons2, $_',
        ],
    'fann_create_standard_array' =>
        [
            'signatureArguments' => '$num_layers, $layers',
            'arguments' => '$num_layers, $layers',
        ],
    'fann_create_standard' =>
        [
            'signatureArguments' => '$num_layers, $num_neurons1, $num_neurons2, ...$_',
            'arguments' => '$num_layers, $num_neurons1, $num_neurons2, $_',
        ],
    'fann_create_train_from_callback' =>
        [
            'signatureArguments' => '$num_data, $num_input, $num_output, $user_function',
            'arguments' => '$num_data, $num_input, $num_output, $user_function',
        ],
    'fann_create_train' =>
        [
            'signatureArguments' => '$num_data, $num_input, $num_output',
            'arguments' => '$num_data, $num_input, $num_output',
        ],
    'fann_descale_input' =>
        [
            'signatureArguments' => '$ann, $input_vector',
            'arguments' => '$ann, $input_vector',
        ],
    'fann_descale_output' =>
        [
            'signatureArguments' => '$ann, $output_vector',
            'arguments' => '$ann, $output_vector',
        ],
    'fann_descale_train' =>
        [
            'signatureArguments' => '$ann, $train_data',
            'arguments' => '$ann, $train_data',
        ],
    'fann_destroy' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_destroy_train' =>
        [
            'signatureArguments' => '$train_data',
            'arguments' => '$train_data',
        ],
    'fann_duplicate_train_data' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'fann_get_activation_function' =>
        [
            'signatureArguments' => '$ann, $layer, $neuron',
            'arguments' => '$ann, $layer, $neuron',
        ],
    'fann_get_activation_steepness' =>
        [
            'signatureArguments' => '$ann, $layer, $neuron',
            'arguments' => '$ann, $layer, $neuron',
        ],
    'fann_get_bias_array' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_bit_fail_limit' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_bit_fail' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_activation_functions_count' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_activation_functions' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_activation_steepnesses_count' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_activation_steepnesses' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_candidate_change_fraction' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_candidate_limit' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_candidate_stagnation_epochs' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_max_cand_epochs' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_max_out_epochs' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_min_cand_epochs' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_min_out_epochs' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_num_candidate_groups' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_num_candidates' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_output_change_fraction' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_output_stagnation_epochs' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_cascade_weight_multiplier' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_connection_array' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_connection_rate' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_errno' =>
        [
            'signatureArguments' => '$errdat',
            'arguments' => '$errdat',
        ],
    'fann_get_errstr' =>
        [
            'signatureArguments' => '$errdat',
            'arguments' => '$errdat',
        ],
    'fann_get_layer_array' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_learning_momentum' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_learning_rate' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_MSE' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_network_type' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_num_input' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_num_layers' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_num_output' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_quickprop_decay' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_quickprop_mu' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_rprop_decrease_factor' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_rprop_delta_max' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_rprop_delta_min' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_rprop_delta_zero' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_rprop_increase_factor' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_sarprop_step_error_shift' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_sarprop_step_error_threshold_factor' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_sarprop_temperature' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_sarprop_weight_decay_shift' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_total_connections' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_total_neurons' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_train_error_function' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_training_algorithm' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_get_train_stop_function' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_init_weights' =>
        [
            'signatureArguments' => '$ann, $train_data',
            'arguments' => '$ann, $train_data',
        ],
    'fann_length_train_data' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'fann_merge_train_data' =>
        [
            'signatureArguments' => '$data1, $data2',
            'arguments' => '$data1, $data2',
        ],
    'fann_num_input_train_data' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'fann_num_output_train_data' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'fann_print_error' =>
        [
            'signatureArguments' => '$errdat',
            'arguments' => '$errdat',
        ],
    'fann_randomize_weights' =>
        [
            'signatureArguments' => '$ann, $min_weight, $max_weight',
            'arguments' => '$ann, $min_weight, $max_weight',
        ],
    'fann_read_train_from_file' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'fann_reset_errno' =>
        [
            'signatureArguments' => '$errdat',
            'arguments' => '$errdat',
        ],
    'fann_reset_errstr' =>
        [
            'signatureArguments' => '$errdat',
            'arguments' => '$errdat',
        ],
    'fann_reset_MSE' =>
        [
            'signatureArguments' => '$ann',
            'arguments' => '$ann',
        ],
    'fann_run' =>
        [
            'signatureArguments' => '$ann, $input',
            'arguments' => '$ann, $input',
        ],
    'fann_save' =>
        [
            'signatureArguments' => '$ann, $configuration_file',
            'arguments' => '$ann, $configuration_file',
        ],
    'fann_save_train' =>
        [
            'signatureArguments' => '$data, $file_name',
            'arguments' => '$data, $file_name',
        ],
    'fann_scale_input' =>
        [
            'signatureArguments' => '$ann, $input_vector',
            'arguments' => '$ann, $input_vector',
        ],
    'fann_scale_input_train_data' =>
        [
            'signatureArguments' => '$train_data, $new_min, $new_max',
            'arguments' => '$train_data, $new_min, $new_max',
        ],
    'fann_scale_output' =>
        [
            'signatureArguments' => '$ann, $output_vector',
            'arguments' => '$ann, $output_vector',
        ],
    'fann_scale_output_train_data' =>
        [
            'signatureArguments' => '$train_data, $new_min, $new_max',
            'arguments' => '$train_data, $new_min, $new_max',
        ],
    'fann_scale_train_data' =>
        [
            'signatureArguments' => '$train_data, $new_min, $new_max',
            'arguments' => '$train_data, $new_min, $new_max',
        ],
    'fann_scale_train' =>
        [
            'signatureArguments' => '$ann, $train_data',
            'arguments' => '$ann, $train_data',
        ],
    'fann_set_activation_function_hidden' =>
        [
            'signatureArguments' => '$ann, $activation_function',
            'arguments' => '$ann, $activation_function',
        ],
    'fann_set_activation_function_layer' =>
        [
            'signatureArguments' => '$ann, $activation_function, $layer',
            'arguments' => '$ann, $activation_function, $layer',
        ],
    'fann_set_activation_function_output' =>
        [
            'signatureArguments' => '$ann, $activation_function',
            'arguments' => '$ann, $activation_function',
        ],
    'fann_set_activation_function' =>
        [
            'signatureArguments' => '$ann, $activation_function, $layer, $neuron',
            'arguments' => '$ann, $activation_function, $layer, $neuron',
        ],
    'fann_set_activation_steepness_hidden' =>
        [
            'signatureArguments' => '$ann, $activation_steepness',
            'arguments' => '$ann, $activation_steepness',
        ],
    'fann_set_activation_steepness_layer' =>
        [
            'signatureArguments' => '$ann, $activation_steepness, $layer',
            'arguments' => '$ann, $activation_steepness, $layer',
        ],
    'fann_set_activation_steepness_output' =>
        [
            'signatureArguments' => '$ann, $activation_steepness',
            'arguments' => '$ann, $activation_steepness',
        ],
    'fann_set_activation_steepness' =>
        [
            'signatureArguments' => '$ann, $activation_steepness, $layer, $neuron',
            'arguments' => '$ann, $activation_steepness, $layer, $neuron',
        ],
    'fann_set_bit_fail_limit' =>
        [
            'signatureArguments' => '$ann, $bit_fail_limit',
            'arguments' => '$ann, $bit_fail_limit',
        ],
    'fann_set_callback' =>
        [
            'signatureArguments' => '$ann, $callback',
            'arguments' => '$ann, $callback',
        ],
    'fann_set_cascade_activation_functions' =>
        [
            'signatureArguments' => '$ann, $cascade_activation_functions',
            'arguments' => '$ann, $cascade_activation_functions',
        ],
    'fann_set_cascade_activation_steepnesses' =>
        [
            'signatureArguments' => '$ann, $cascade_activation_steepnesses_count',
            'arguments' => '$ann, $cascade_activation_steepnesses_count',
        ],
    'fann_set_cascade_candidate_change_fraction' =>
        [
            'signatureArguments' => '$ann, $cascade_candidate_change_fraction',
            'arguments' => '$ann, $cascade_candidate_change_fraction',
        ],
    'fann_set_cascade_candidate_limit' =>
        [
            'signatureArguments' => '$ann, $cascade_candidate_limit',
            'arguments' => '$ann, $cascade_candidate_limit',
        ],
    'fann_set_cascade_candidate_stagnation_epochs' =>
        [
            'signatureArguments' => '$ann, $cascade_candidate_stagnation_epochs',
            'arguments' => '$ann, $cascade_candidate_stagnation_epochs',
        ],
    'fann_set_cascade_max_cand_epochs' =>
        [
            'signatureArguments' => '$ann, $cascade_max_cand_epochs',
            'arguments' => '$ann, $cascade_max_cand_epochs',
        ],
    'fann_set_cascade_max_out_epochs' =>
        [
            'signatureArguments' => '$ann, $cascade_max_out_epochs',
            'arguments' => '$ann, $cascade_max_out_epochs',
        ],
    'fann_set_cascade_min_cand_epochs' =>
        [
            'signatureArguments' => '$ann, $cascade_min_cand_epochs',
            'arguments' => '$ann, $cascade_min_cand_epochs',
        ],
    'fann_set_cascade_min_out_epochs' =>
        [
            'signatureArguments' => '$ann, $cascade_min_out_epochs',
            'arguments' => '$ann, $cascade_min_out_epochs',
        ],
    'fann_set_cascade_num_candidate_groups' =>
        [
            'signatureArguments' => '$ann, $cascade_num_candidate_groups',
            'arguments' => '$ann, $cascade_num_candidate_groups',
        ],
    'fann_set_cascade_output_change_fraction' =>
        [
            'signatureArguments' => '$ann, $cascade_output_change_fraction',
            'arguments' => '$ann, $cascade_output_change_fraction',
        ],
    'fann_set_cascade_output_stagnation_epochs' =>
        [
            'signatureArguments' => '$ann, $cascade_output_stagnation_epochs',
            'arguments' => '$ann, $cascade_output_stagnation_epochs',
        ],
    'fann_set_cascade_weight_multiplier' =>
        [
            'signatureArguments' => '$ann, $cascade_weight_multiplier',
            'arguments' => '$ann, $cascade_weight_multiplier',
        ],
    'fann_set_error_log' =>
        [
            'signatureArguments' => '$errdat, $log_file',
            'arguments' => '$errdat, $log_file',
        ],
    'fann_set_input_scaling_params' =>
        [
            'signatureArguments' => '$ann, $train_data, $new_input_min, $new_input_max',
            'arguments' => '$ann, $train_data, $new_input_min, $new_input_max',
        ],
    'fann_set_learning_momentum' =>
        [
            'signatureArguments' => '$ann, $learning_momentum',
            'arguments' => '$ann, $learning_momentum',
        ],
    'fann_set_learning_rate' =>
        [
            'signatureArguments' => '$ann, $learning_rate',
            'arguments' => '$ann, $learning_rate',
        ],
    'fann_set_output_scaling_params' =>
        [
            'signatureArguments' => '$ann, $train_data, $new_output_min, $new_output_max',
            'arguments' => '$ann, $train_data, $new_output_min, $new_output_max',
        ],
    'fann_set_quickprop_decay' =>
        [
            'signatureArguments' => '$ann, $quickprop_decay',
            'arguments' => '$ann, $quickprop_decay',
        ],
    'fann_set_quickprop_mu' =>
        [
            'signatureArguments' => '$ann, $quickprop_mu',
            'arguments' => '$ann, $quickprop_mu',
        ],
    'fann_set_rprop_decrease_factor' =>
        [
            'signatureArguments' => '$ann, $rprop_decrease_factor',
            'arguments' => '$ann, $rprop_decrease_factor',
        ],
    'fann_set_rprop_delta_max' =>
        [
            'signatureArguments' => '$ann, $rprop_delta_max',
            'arguments' => '$ann, $rprop_delta_max',
        ],
    'fann_set_rprop_delta_min' =>
        [
            'signatureArguments' => '$ann, $rprop_delta_min',
            'arguments' => '$ann, $rprop_delta_min',
        ],
    'fann_set_rprop_delta_zero' =>
        [
            'signatureArguments' => '$ann, $rprop_delta_zero',
            'arguments' => '$ann, $rprop_delta_zero',
        ],
    'fann_set_rprop_increase_factor' =>
        [
            'signatureArguments' => '$ann, $rprop_increase_factor',
            'arguments' => '$ann, $rprop_increase_factor',
        ],
    'fann_set_sarprop_step_error_shift' =>
        [
            'signatureArguments' => '$ann, $sarprop_step_error_shift',
            'arguments' => '$ann, $sarprop_step_error_shift',
        ],
    'fann_set_sarprop_step_error_threshold_factor' =>
        [
            'signatureArguments' => '$ann, $sarprop_step_error_threshold_factor',
            'arguments' => '$ann, $sarprop_step_error_threshold_factor',
        ],
    'fann_set_sarprop_temperature' =>
        [
            'signatureArguments' => '$ann, $sarprop_temperature',
            'arguments' => '$ann, $sarprop_temperature',
        ],
    'fann_set_sarprop_weight_decay_shift' =>
        [
            'signatureArguments' => '$ann, $sarprop_weight_decay_shift',
            'arguments' => '$ann, $sarprop_weight_decay_shift',
        ],
    'fann_set_scaling_params' =>
        [
            'signatureArguments' => '$ann, $train_data, $new_input_min, $new_input_max, $new_output_min, $new_output_max',
            'arguments' => '$ann, $train_data, $new_input_min, $new_input_max, $new_output_min, $new_output_max',
        ],
    'fann_set_train_error_function' =>
        [
            'signatureArguments' => '$ann, $error_function',
            'arguments' => '$ann, $error_function',
        ],
    'fann_set_training_algorithm' =>
        [
            'signatureArguments' => '$ann, $training_algorithm',
            'arguments' => '$ann, $training_algorithm',
        ],
    'fann_set_train_stop_function' =>
        [
            'signatureArguments' => '$ann, $stop_function',
            'arguments' => '$ann, $stop_function',
        ],
    'fann_set_weight_array' =>
        [
            'signatureArguments' => '$ann, $connections',
            'arguments' => '$ann, $connections',
        ],
    'fann_set_weight' =>
        [
            'signatureArguments' => '$ann, $from_neuron, $to_neuron, $weight',
            'arguments' => '$ann, $from_neuron, $to_neuron, $weight',
        ],
    'fann_shuffle_train_data' =>
        [
            'signatureArguments' => '$train_data',
            'arguments' => '$train_data',
        ],
    'fann_subset_train_data' =>
        [
            'signatureArguments' => '$data, $pos, $length',
            'arguments' => '$data, $pos, $length',
        ],
    'fann_test_data' =>
        [
            'signatureArguments' => '$ann, $data',
            'arguments' => '$ann, $data',
        ],
    'fann_test' =>
        [
            'signatureArguments' => '$ann, $input, $desired_output',
            'arguments' => '$ann, $input, $desired_output',
        ],
    'fann_train_epoch' =>
        [
            'signatureArguments' => '$ann, $data',
            'arguments' => '$ann, $data',
        ],
    'fann_train_on_data' =>
        [
            'signatureArguments' => '$ann, $data, $max_epochs, $epochs_between_reports, $desired_error',
            'arguments' => '$ann, $data, $max_epochs, $epochs_between_reports, $desired_error',
        ],
    'fann_train_on_file' =>
        [
            'signatureArguments' => '$ann, $filename, $max_epochs, $epochs_between_reports, $desired_error',
            'arguments' => '$ann, $filename, $max_epochs, $epochs_between_reports, $desired_error',
        ],
    'fann_train' =>
        [
            'signatureArguments' => '$ann, $input, $desired_output',
            'arguments' => '$ann, $input, $desired_output',
        ],
    'xcache_get' =>
        [
            'signatureArguments' => '$name',
            'arguments' => '$name',
        ],
    'xcache_set' =>
        [
            'signatureArguments' => '$name, $value, $ttl = 0',
            'arguments' => '$name, $value, $ttl',
        ],
    'xcache_isset' =>
        [
            'signatureArguments' => '$name',
            'arguments' => '$name',
        ],
    'xcache_unset' =>
        [
            'signatureArguments' => '$name',
            'arguments' => '$name',
        ],
    'xcache_unset_by_prefix' =>
        [
            'signatureArguments' => '$prefix',
            'arguments' => '$prefix',
        ],
    'xcache_inc' =>
        [
            'signatureArguments' => '$name, $value = 1, $ttl = 0',
            'arguments' => '$name, $value, $ttl',
        ],
    'xcache_dec' =>
        [
            'signatureArguments' => '$name, $value = 1, $ttl = 0',
            'arguments' => '$name, $value, $ttl',
        ],
    'xcache_count' =>
        [
            'signatureArguments' => '$type',
            'arguments' => '$type',
        ],
    'xcache_info' =>
        [
            'signatureArguments' => '$type, $id',
            'arguments' => '$type, $id',
        ],
    'xcache_list' =>
        [
            'signatureArguments' => '$type, $id',
            'arguments' => '$type, $id',
        ],
    'xcache_clear_cache' =>
        [
            'signatureArguments' => '$type, $id = -1',
            'arguments' => '$type, $id',
        ],
    'xcache_coredump' =>
        [
            'signatureArguments' => '$op_type',
            'arguments' => '$op_type',
        ],
    'xcache_coverager_decode' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'xcache_coverager_start' =>
        [
            'signatureArguments' => '$clean = true',
            'arguments' => '$clean',
        ],
    'xcache_coverager_stop' =>
        [
            'signatureArguments' => '$clean = false',
            'arguments' => '$clean',
        ],
    'xcache_coverager_get' =>
        [
            'signatureArguments' => '$clean = false',
            'arguments' => '$clean',
        ],
    'xcache_asm' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'xcache_dasm_file' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'xcache_dasm_string' =>
        [
            'signatureArguments' => '$code',
            'arguments' => '$code',
        ],
    'xcache_encode' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'xcache_decode' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'xcache_get_op_type' =>
        [
            'signatureArguments' => '$op_type',
            'arguments' => '$op_type',
        ],
    'xcache_get_data_type' =>
        [
            'signatureArguments' => '$type',
            'arguments' => '$type',
        ],
    'xcache_get_opcode' =>
        [
            'signatureArguments' => '$opcode',
            'arguments' => '$opcode',
        ],
    'xcache_get_op_spec' =>
        [
            'signatureArguments' => '$op_type',
            'arguments' => '$op_type',
        ],
    'xcache_get_opcode_spec' =>
        [
            'signatureArguments' => '$opcode',
            'arguments' => '$opcode',
        ],
    'xcache_is_autoglobal' =>
        [
            'signatureArguments' => '$name',
            'arguments' => '$name',
        ],
    'simplexml_load_file' =>
        [
            'signatureArguments' => 'string $filename, ?string $class_name = "SimpleXMLElement", int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false',
            'arguments' => '$filename, $class_name, $options, $namespace_or_prefix, $is_prefix',
        ],
    'simplexml_load_string' =>
        [
            'signatureArguments' => 'string $data, ?string $class_name = "SimpleXMLElement", int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false',
            'arguments' => '$data, $class_name, $options, $namespace_or_prefix, $is_prefix',
        ],
    'simplexml_import_dom' =>
        [
            'signatureArguments' => 'SimpleXMLElement|DOMNode $node, ?string $class_name = "SimpleXMLElement"',
            'arguments' => '$node, $class_name',
        ],
    'filter_input' =>
        [
            'signatureArguments' => 'int $type, string $var_name, int $filter = FILTER_DEFAULT, array|int $options = 0',
            'arguments' => '$type, $var_name, $filter, $options',
        ],
    'filter_var' =>
        [
            'signatureArguments' => 'mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0',
            'arguments' => '$value, $filter, $options',
        ],
    'filter_input_array' =>
        [
            'signatureArguments' => 'int $type, array|int $options = FILTER_DEFAULT, bool $add_empty = true',
            'arguments' => '$type, $options, $add_empty',
        ],
    'filter_var_array' =>
        [
            'signatureArguments' => 'array $array, array|int $options = FILTER_DEFAULT, bool $add_empty = true',
            'arguments' => '$array, $options, $add_empty',
        ],
    'filter_list' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'filter_has_var' =>
        [
            'signatureArguments' => 'int $input_type, string $var_name',
            'arguments' => '$input_type, $var_name',
        ],
    'filter_id' =>
        [
            'signatureArguments' => 'string $name',
            'arguments' => '$name',
        ],
    'meminfo_dump' =>
        [
            'signatureArguments' => '$stream',
            'arguments' => '$stream',
        ],
    'pcntl_fork' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'pcntl_signal' =>
        [
            'signatureArguments' => 'int $signal, $handler, bool $restart_syscalls = true',
            'arguments' => '$signal, $handler, $restart_syscalls',
        ],
    'pcntl_signal_dispatch' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'pcntl_wifexited' =>
        [
            'signatureArguments' => 'int $status',
            'arguments' => '$status',
        ],
    'pcntl_wifstopped' =>
        [
            'signatureArguments' => 'int $status',
            'arguments' => '$status',
        ],
    'pcntl_wifsignaled' =>
        [
            'signatureArguments' => 'int $status',
            'arguments' => '$status',
        ],
    'pcntl_wexitstatus' =>
        [
            'signatureArguments' => 'int $status',
            'arguments' => '$status',
        ],
    'pcntl_wifcontinued' =>
        [
            'signatureArguments' => 'int $status',
            'arguments' => '$status',
        ],
    'pcntl_wtermsig' =>
        [
            'signatureArguments' => 'int $status',
            'arguments' => '$status',
        ],
    'pcntl_wstopsig' =>
        [
            'signatureArguments' => 'int $status',
            'arguments' => '$status',
        ],
    'pcntl_exec' =>
        [
            'signatureArguments' => 'string $path, array $args = [], array $env_vars = []',
            'arguments' => '$path, $args, $env_vars',
        ],
    'pcntl_alarm' =>
        [
            'signatureArguments' => 'int $seconds',
            'arguments' => '$seconds',
        ],
    'pcntl_get_last_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'pcntl_errno' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'pcntl_strerror' =>
        [
            'signatureArguments' => 'int $error_code',
            'arguments' => '$error_code',
        ],
    'pcntl_getpriority' =>
        [
            'signatureArguments' => '?int $process_id, int $mode = PRIO_PROCESS',
            'arguments' => '$process_id, $mode',
        ],
    'pcntl_setpriority' =>
        [
            'signatureArguments' => 'int $priority, ?int $process_id, int $mode = PRIO_PROCESS',
            'arguments' => '$priority, $process_id, $mode',
        ],
    'pcntl_sigprocmask' =>
        [
            'signatureArguments' => 'int $mode, array $signals, &$old_signals',
            'arguments' => '$mode, $signals, $old_signals',
        ],
    'pcntl_sigwaitinfo' =>
        [
            'signatureArguments' => 'array $signals, &$info = []',
            'arguments' => '$signals, $info',
        ],
    'pcntl_sigtimedwait' =>
        [
            'signatureArguments' => 'array $signals, &$info = [], int $seconds = 0, int $nanoseconds = 0',
            'arguments' => '$signals, $info, $seconds, $nanoseconds',
        ],
    'pcntl_signal_get_handler' =>
        [
            'signatureArguments' => 'int $signal',
            'arguments' => '$signal',
        ],
    'pcntl_unshare' =>
        [
            'signatureArguments' => 'int $flags',
            'arguments' => '$flags',
        ],
    'com_create_guid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'com_event_sink' =>
        [
            'signatureArguments' => '$comobject, $sinkobject, $sinkinterface = null',
            'arguments' => '$comobject, $sinkobject, $sinkinterface',
        ],
    'com_get_active_object' =>
        [
            'signatureArguments' => '$progid, $code_page = CP_ACP',
            'arguments' => '$progid, $code_page',
        ],
    'com_load_typelib' =>
        [
            'signatureArguments' => '$typelib_name, $case_insensitive = true',
            'arguments' => '$typelib_name, $case_insensitive',
        ],
    'com_message_pump' =>
        [
            'signatureArguments' => '$timeoutms = 0',
            'arguments' => '$timeoutms',
        ],
    'com_print_typeinfo' =>
        [
            'signatureArguments' => '$comobject, $dispinterface = null, $wantsink = false',
            'arguments' => '$comobject, $dispinterface, $wantsink',
        ],
    'variant_abs' =>
        [
            'signatureArguments' => '$val',
            'arguments' => '$val',
        ],
    'variant_add' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_and' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_cast' =>
        [
            'signatureArguments' => '$variant, $type',
            'arguments' => '$variant, $type',
        ],
    'variant_cat' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_cmp' =>
        [
            'signatureArguments' => '$left, $right, $lcid = null, $flags = null',
            'arguments' => '$left, $right, $lcid, $flags',
        ],
    'variant_date_from_timestamp' =>
        [
            'signatureArguments' => '$timestamp',
            'arguments' => '$timestamp',
        ],
    'variant_date_to_timestamp' =>
        [
            'signatureArguments' => '$variant',
            'arguments' => '$variant',
        ],
    'variant_div' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_eqv' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_fix' =>
        [
            'signatureArguments' => '$variant',
            'arguments' => '$variant',
        ],
    'variant_get_type' =>
        [
            'signatureArguments' => '$variant',
            'arguments' => '$variant',
        ],
    'variant_idiv' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_imp' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_int' =>
        [
            'signatureArguments' => '$variant',
            'arguments' => '$variant',
        ],
    'variant_mod' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_mul' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_neg' =>
        [
            'signatureArguments' => '$variant',
            'arguments' => '$variant',
        ],
    'variant_not' =>
        [
            'signatureArguments' => '$variant',
            'arguments' => '$variant',
        ],
    'variant_or' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_pow' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_round' =>
        [
            'signatureArguments' => '$variant, $decimals',
            'arguments' => '$variant, $decimals',
        ],
    'variant_set_type' =>
        [
            'signatureArguments' => '$variant, $type',
            'arguments' => '$variant, $type',
        ],
    'variant_set' =>
        [
            'signatureArguments' => '$variant, $value',
            'arguments' => '$variant, $value',
        ],
    'variant_sub' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'variant_xor' =>
        [
            'signatureArguments' => '$left, $right',
            'arguments' => '$left, $right',
        ],
    'xmlrpc_encode' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'xmlrpc_decode' =>
        [
            'signatureArguments' => '$xml, $encoding = "iso-8859-1"',
            'arguments' => '$xml, $encoding',
        ],
    'xmlrpc_decode_request' =>
        [
            'signatureArguments' => '$xml, &$method, $encoding = null',
            'arguments' => '$xml, $method, $encoding',
        ],
    'xmlrpc_encode_request' =>
        [
            'signatureArguments' => '$method, $params, ?array $output_options = null',
            'arguments' => '$method, $params, $output_options',
        ],
    'xmlrpc_get_type' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'xmlrpc_set_type' =>
        [
            'signatureArguments' => '&$value, $type',
            'arguments' => '$value, $type',
        ],
    'xmlrpc_is_fault' =>
        [
            'signatureArguments' => 'array $arg',
            'arguments' => '$arg',
        ],
    'xmlrpc_server_create' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'xmlrpc_server_destroy' =>
        [
            'signatureArguments' => '$server',
            'arguments' => '$server',
        ],
    'xmlrpc_server_register_method' =>
        [
            'signatureArguments' => '$server, $method_name, $function',
            'arguments' => '$server, $method_name, $function',
        ],
    'xmlrpc_server_call_method' =>
        [
            'signatureArguments' => '$server, $xml, $user_data, ?array $output_options = null',
            'arguments' => '$server, $xml, $user_data, $output_options',
        ],
    'xmlrpc_parse_method_descriptions' =>
        [
            'signatureArguments' => '$xml',
            'arguments' => '$xml',
        ],
    'xmlrpc_server_add_introspection_data' =>
        [
            'signatureArguments' => '$server, array $desc',
            'arguments' => '$server, $desc',
        ],
    'xmlrpc_server_register_introspection_callback' =>
        [
            'signatureArguments' => '$server, $function',
            'arguments' => '$server, $function',
        ],
    'shmop_open' =>
        [
            'signatureArguments' => 'int $key, string $mode, int $permissions, int $size',
            'arguments' => '$key, $mode, $permissions, $size',
        ],
    'shmop_read' =>
        [
            'signatureArguments' => '$shmop, int $offset, int $size',
            'arguments' => '$shmop, $offset, $size',
        ],
    'shmop_close' =>
        [
            'signatureArguments' => '$shmop',
            'arguments' => '$shmop',
        ],
    'shmop_size' =>
        [
            'signatureArguments' => '$shmop',
            'arguments' => '$shmop',
        ],
    'shmop_write' =>
        [
            'signatureArguments' => '$shmop, string $data, int $offset',
            'arguments' => '$shmop, $data, $offset',
        ],
    'shmop_delete' =>
        [
            'signatureArguments' => '$shmop',
            'arguments' => '$shmop',
        ],
    'fastlzCompress' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'fastlzDecompress' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'zlibCompress' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'zlibDecompress' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'passthruDecoder' =>
        [
            'signatureArguments' => '$bytes, $flags, $datatype',
            'arguments' => '$bytes, $flags, $datatype',
        ],
    'passthruEncoder' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'defaultDecoder' =>
        [
            'signatureArguments' => '$bytes, $flags, $datatype',
            'arguments' => '$bytes, $flags, $datatype',
        ],
    'defaultEncoder' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'basicDecoderV1' =>
        [
            'signatureArguments' => '$bytes, $flags, $datatype, $options',
            'arguments' => '$bytes, $flags, $datatype, $options',
        ],
    'basicEncoderV1' =>
        [
            'signatureArguments' => '$value, $options',
            'arguments' => '$value, $options',
        ],
    'ibase_connect' =>
        [
            'signatureArguments' => '$database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null',
            'arguments' => '$database, $username, $password, $charset, $buffers, $dialect, $role, $sync',
        ],
    'ibase_pconnect' =>
        [
            'signatureArguments' => '$database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null',
            'arguments' => '$database, $username, $password, $charset, $buffers, $dialect, $role, $sync',
        ],
    'ibase_close' =>
        [
            'signatureArguments' => '$connection_id = null',
            'arguments' => '$connection_id',
        ],
    'ibase_drop_db' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'ibase_query' =>
        [
            'signatureArguments' => '$link_identifier = null, $query, $bind_args = null',
            'arguments' => '$link_identifier, $query, $bind_args',
        ],
    'ibase_fetch_row' =>
        [
            'signatureArguments' => '$result_identifier, $fetch_flag = null',
            'arguments' => '$result_identifier, $fetch_flag',
        ],
    'ibase_fetch_assoc' =>
        [
            'signatureArguments' => '$result, $fetch_flag = null',
            'arguments' => '$result, $fetch_flag',
        ],
    'ibase_fetch_object' =>
        [
            'signatureArguments' => '$result_id, $fetch_flag = null',
            'arguments' => '$result_id, $fetch_flag',
        ],
    'ibase_free_result' =>
        [
            'signatureArguments' => '$result_identifier',
            'arguments' => '$result_identifier',
        ],
    'ibase_name_result' =>
        [
            'signatureArguments' => '$result, $name',
            'arguments' => '$result, $name',
        ],
    'ibase_prepare' =>
        [
            'signatureArguments' => '$query',
            'arguments' => '$query',
        ],
    'ibase_execute' =>
        [
            'signatureArguments' => '$query, ...$bind_arg',
            'arguments' => '$query, $bind_arg',
        ],
    'ibase_free_query' =>
        [
            'signatureArguments' => '$query',
            'arguments' => '$query',
        ],
    'ibase_gen_id' =>
        [
            'signatureArguments' => '$generator, $increment = null, $link_identifier = null',
            'arguments' => '$generator, $increment, $link_identifier',
        ],
    'ibase_num_fields' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'ibase_num_params' =>
        [
            'signatureArguments' => '$query',
            'arguments' => '$query',
        ],
    'ibase_affected_rows' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'ibase_field_info' =>
        [
            'signatureArguments' => '$result, $field_number',
            'arguments' => '$result, $field_number',
        ],
    'ibase_param_info' =>
        [
            'signatureArguments' => '$query, $param_number',
            'arguments' => '$query, $param_number',
        ],
    'ibase_trans' =>
        [
            'signatureArguments' => '$trans_args = null, $link_identifier = null',
            'arguments' => '$trans_args, $link_identifier',
        ],
    'ibase_commit' =>
        [
            'signatureArguments' => '$link_or_trans_identifier = null',
            'arguments' => '$link_or_trans_identifier',
        ],
    'ibase_rollback' =>
        [
            'signatureArguments' => '$link_or_trans_identifier = null',
            'arguments' => '$link_or_trans_identifier',
        ],
    'ibase_commit_ret' =>
        [
            'signatureArguments' => '$link_or_trans_identifier = null',
            'arguments' => '$link_or_trans_identifier',
        ],
    'ibase_rollback_ret' =>
        [
            'signatureArguments' => '$link_or_trans_identifier = null',
            'arguments' => '$link_or_trans_identifier',
        ],
    'ibase_blob_info' =>
        [
            'signatureArguments' => '$link_identifier, $blob_id',
            'arguments' => '$link_identifier, $blob_id',
        ],
    'ibase_blob_create' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'ibase_blob_add' =>
        [
            'signatureArguments' => '$blob_handle, $data',
            'arguments' => '$blob_handle, $data',
        ],
    'ibase_blob_cancel' =>
        [
            'signatureArguments' => '$blob_handle',
            'arguments' => '$blob_handle',
        ],
    'ibase_blob_close' =>
        [
            'signatureArguments' => '$blob_handle',
            'arguments' => '$blob_handle',
        ],
    'ibase_blob_open' =>
        [
            'signatureArguments' => '$link_identifier, $blob_id',
            'arguments' => '$link_identifier, $blob_id',
        ],
    'ibase_blob_get' =>
        [
            'signatureArguments' => '$blob_handle, $len',
            'arguments' => '$blob_handle, $len',
        ],
    'ibase_blob_echo' =>
        [
            'signatureArguments' => '$blob_id',
            'arguments' => '$blob_id',
        ],
    'ibase_blob_import' =>
        [
            'signatureArguments' => '$link_identifier, $file_handle',
            'arguments' => '$link_identifier, $file_handle',
        ],
    'ibase_errmsg' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ibase_errcode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ibase_add_user' =>
        [
            'signatureArguments' => '$service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null',
            'arguments' => '$service_handle, $user_name, $password, $first_name, $middle_name, $last_name',
        ],
    'ibase_modify_user' =>
        [
            'signatureArguments' => '$service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null',
            'arguments' => '$service_handle, $user_name, $password, $first_name, $middle_name, $last_name',
        ],
    'ibase_delete_user' =>
        [
            'signatureArguments' => '$service_handle, $user_name',
            'arguments' => '$service_handle, $user_name',
        ],
    'ibase_service_attach' =>
        [
            'signatureArguments' => '$host, $dba_username, $dba_password',
            'arguments' => '$host, $dba_username, $dba_password',
        ],
    'ibase_service_detach' =>
        [
            'signatureArguments' => '$service_handle',
            'arguments' => '$service_handle',
        ],
    'ibase_backup' =>
        [
            'signatureArguments' => '$service_handle, $source_db, $dest_file, $options = null, $verbose = null',
            'arguments' => '$service_handle, $source_db, $dest_file, $options, $verbose',
        ],
    'ibase_restore' =>
        [
            'signatureArguments' => '$service_handle, $source_file, $dest_db, $options = null, $verbose = null',
            'arguments' => '$service_handle, $source_file, $dest_db, $options, $verbose',
        ],
    'ibase_maintain_db' =>
        [
            'signatureArguments' => '$service_handle, $db, $action, $argument = null',
            'arguments' => '$service_handle, $db, $action, $argument',
        ],
    'ibase_db_info' =>
        [
            'signatureArguments' => '$service_handle, $db, $action, $argument = null',
            'arguments' => '$service_handle, $db, $action, $argument',
        ],
    'ibase_server_info' =>
        [
            'signatureArguments' => '$service_handle, $action',
            'arguments' => '$service_handle, $action',
        ],
    'ibase_wait_event' =>
        [
            'signatureArguments' => '$event_name1, $event_name2 = null, ...$_',
            'arguments' => '$event_name1, $event_name2, $_',
        ],
    'ibase_set_event_handler' =>
        [
            'signatureArguments' => '$event_handler, $event_name1, $event_name2 = null, ...$_',
            'arguments' => '$event_handler, $event_name1, $event_name2, $_',
        ],
    'ibase_free_event_handler' =>
        [
            'signatureArguments' => '$event',
            'arguments' => '$event',
        ],
    'fbird_connect' =>
        [
            'signatureArguments' => '$database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null',
            'arguments' => '$database, $username, $password, $charset, $buffers, $dialect, $role, $sync',
        ],
    'fbird_pconnect' =>
        [
            'signatureArguments' => '$database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null',
            'arguments' => '$database, $username, $password, $charset, $buffers, $dialect, $role, $sync',
        ],
    'fbird_close' =>
        [
            'signatureArguments' => '$connection_id = null',
            'arguments' => '$connection_id',
        ],
    'fbird_drop_db' =>
        [
            'signatureArguments' => '$connection = null',
            'arguments' => '$connection',
        ],
    'fbird_query' =>
        [
            'signatureArguments' => '$link_identifier = null, $query, $bind_args = null',
            'arguments' => '$link_identifier, $query, $bind_args',
        ],
    'fbird_fetch_row' =>
        [
            'signatureArguments' => '$result_identifier, $fetch_flag = null',
            'arguments' => '$result_identifier, $fetch_flag',
        ],
    'fbird_fetch_assoc' =>
        [
            'signatureArguments' => '$result, $fetch_flag = null',
            'arguments' => '$result, $fetch_flag',
        ],
    'fbird_fetch_object' =>
        [
            'signatureArguments' => '$result_id, $fetch_flag = null',
            'arguments' => '$result_id, $fetch_flag',
        ],
    'fbird_free_result' =>
        [
            'signatureArguments' => '$result_identifier',
            'arguments' => '$result_identifier',
        ],
    'fbird_name_result' =>
        [
            'signatureArguments' => '$result, $name',
            'arguments' => '$result, $name',
        ],
    'fbird_prepare' =>
        [
            'signatureArguments' => '$query',
            'arguments' => '$query',
        ],
    'fbird_execute' =>
        [
            'signatureArguments' => '$query, ...$bind_arg',
            'arguments' => '$query, $bind_arg',
        ],
    'fbird_free_query' =>
        [
            'signatureArguments' => '$query',
            'arguments' => '$query',
        ],
    'fbird_gen_id' =>
        [
            'signatureArguments' => '$generator, $increment = null, $link_identifier = null',
            'arguments' => '$generator, $increment, $link_identifier',
        ],
    'fbird_num_fields' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'fbird_num_params' =>
        [
            'signatureArguments' => '$query',
            'arguments' => '$query',
        ],
    'fbird_affected_rows' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'fbird_field_info' =>
        [
            'signatureArguments' => '$result, $field_number',
            'arguments' => '$result, $field_number',
        ],
    'fbird_param_info' =>
        [
            'signatureArguments' => '$query, $param_number',
            'arguments' => '$query, $param_number',
        ],
    'fbird_trans' =>
        [
            'signatureArguments' => '$trans_args = null, $link_identifier = null',
            'arguments' => '$trans_args, $link_identifier',
        ],
    'fbird_commit' =>
        [
            'signatureArguments' => '$link_or_trans_identifier = null',
            'arguments' => '$link_or_trans_identifier',
        ],
    'fbird_rollback' =>
        [
            'signatureArguments' => '$link_or_trans_identifier = null',
            'arguments' => '$link_or_trans_identifier',
        ],
    'fbird_commit_ret' =>
        [
            'signatureArguments' => '$link_or_trans_identifier = null',
            'arguments' => '$link_or_trans_identifier',
        ],
    'fbird_rollback_ret' =>
        [
            'signatureArguments' => '$link_or_trans_identifier = null',
            'arguments' => '$link_or_trans_identifier',
        ],
    'fbird_blob_info' =>
        [
            'signatureArguments' => '$link_identifier, $blob_id',
            'arguments' => '$link_identifier, $blob_id',
        ],
    'fbird_blob_create' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'fbird_blob_add' =>
        [
            'signatureArguments' => '$blob_handle, $data',
            'arguments' => '$blob_handle, $data',
        ],
    'fbird_blob_cancel' =>
        [
            'signatureArguments' => '$blob_handle',
            'arguments' => '$blob_handle',
        ],
    'fbird_blob_close' =>
        [
            'signatureArguments' => '$blob_handle',
            'arguments' => '$blob_handle',
        ],
    'fbird_blob_open' =>
        [
            'signatureArguments' => '$link_identifier, $blob_id',
            'arguments' => '$link_identifier, $blob_id',
        ],
    'fbird_blob_get' =>
        [
            'signatureArguments' => '$blob_handle, $len',
            'arguments' => '$blob_handle, $len',
        ],
    'fbird_blob_echo' =>
        [
            'signatureArguments' => '$blob_id',
            'arguments' => '$blob_id',
        ],
    'fbird_blob_import' =>
        [
            'signatureArguments' => '$link_identifier, $file_handle',
            'arguments' => '$link_identifier, $file_handle',
        ],
    'fbird_errmsg' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'fbird_errcode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'fbird_add_user' =>
        [
            'signatureArguments' => '$service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null',
            'arguments' => '$service_handle, $user_name, $password, $first_name, $middle_name, $last_name',
        ],
    'fbird_modify_user' =>
        [
            'signatureArguments' => '$service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null',
            'arguments' => '$service_handle, $user_name, $password, $first_name, $middle_name, $last_name',
        ],
    'fbird_delete_user' =>
        [
            'signatureArguments' => '$service_handle, $user_name',
            'arguments' => '$service_handle, $user_name',
        ],
    'fbird_service_attach' =>
        [
            'signatureArguments' => '$host, $dba_username, $dba_password',
            'arguments' => '$host, $dba_username, $dba_password',
        ],
    'fbird_service_detach' =>
        [
            'signatureArguments' => '$service_handle',
            'arguments' => '$service_handle',
        ],
    'fbird_backup' =>
        [
            'signatureArguments' => '$service_handle, $source_db, $dest_file, $options = null, $verbose = null',
            'arguments' => '$service_handle, $source_db, $dest_file, $options, $verbose',
        ],
    'fbird_restore' =>
        [
            'signatureArguments' => '$service_handle, $source_file, $dest_db, $options = null, $verbose = null',
            'arguments' => '$service_handle, $source_file, $dest_db, $options, $verbose',
        ],
    'fbird_maintain_db' =>
        [
            'signatureArguments' => '$service_handle, $db, $action, $argument = null',
            'arguments' => '$service_handle, $db, $action, $argument',
        ],
    'fbird_db_info' =>
        [
            'signatureArguments' => '$service_handle, $db, $action, $argument = null',
            'arguments' => '$service_handle, $db, $action, $argument',
        ],
    'fbird_server_info' =>
        [
            'signatureArguments' => '$service_handle, $action',
            'arguments' => '$service_handle, $action',
        ],
    'fbird_wait_event' =>
        [
            'signatureArguments' => '$event_name1, $event_name2 = null, ...$_',
            'arguments' => '$event_name1, $event_name2, $_',
        ],
    'fbird_set_event_handler' =>
        [
            'signatureArguments' => '$event_handler, $event_name1, $event_name2 = null, ...$_',
            'arguments' => '$event_handler, $event_name1, $event_name2, $_',
        ],
    'fbird_free_event_handler' =>
        [
            'signatureArguments' => '$event',
            'arguments' => '$event',
        ],
    'openssl_pkey_free' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'openssl_pkey_new' =>
        [
            'signatureArguments' => '?array $options',
            'arguments' => '$options',
        ],
    'openssl_pkey_get_public' =>
        [
            'signatureArguments' => '$public_key',
            'arguments' => '$public_key',
        ],
    'openssl_pkey_get_details' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'openssl_free_key' =>
        [
            'signatureArguments' => '$key',
            'arguments' => '$key',
        ],
    'openssl_get_publickey' =>
        [
            'signatureArguments' => '$public_key',
            'arguments' => '$public_key',
        ],
    'openssl_spki_new' =>
        [
            'signatureArguments' => '$private_key, string $challenge, int $digest_algo = 2',
            'arguments' => '$private_key, $challenge, $digest_algo',
        ],
    'openssl_spki_verify' =>
        [
            'signatureArguments' => 'string $spki',
            'arguments' => '$spki',
        ],
    'openssl_spki_export_challenge' =>
        [
            'signatureArguments' => 'string $spki',
            'arguments' => '$spki',
        ],
    'openssl_spki_export' =>
        [
            'signatureArguments' => 'string $spki',
            'arguments' => '$spki',
        ],
    'openssl_x509_read' =>
        [
            'signatureArguments' => '$certificate',
            'arguments' => '$certificate',
        ],
    'openssl_x509_fingerprint' =>
        [
            'signatureArguments' => '$certificate, string $digest_algo = \'sha1\', bool $binary = false',
            'arguments' => '$certificate, $digest_algo, $binary',
        ],
    'openssl_x509_free' =>
        [
            'signatureArguments' => '$certificate',
            'arguments' => '$certificate',
        ],
    'openssl_x509_export' =>
        [
            'signatureArguments' => '$certificate, &$output, bool $no_text = true',
            'arguments' => '$certificate, $output, $no_text',
        ],
    'openssl_x509_export_to_file' =>
        [
            'signatureArguments' => '$certificate, string $output_filename, bool $no_text = true',
            'arguments' => '$certificate, $output_filename, $no_text',
        ],
    'openssl_pkcs12_export_to_file' =>
        [
            'signatureArguments' => '$certificate, string $output_filename, $private_key, string $passphrase, array $options = []',
            'arguments' => '$certificate, $output_filename, $private_key, $passphrase, $options',
        ],
    'openssl_pkcs12_read' =>
        [
            'signatureArguments' => 'string $pkcs12, &$certificates, string $passphrase',
            'arguments' => '$pkcs12, $certificates, $passphrase',
        ],
    'openssl_csr_export' =>
        [
            'signatureArguments' => '$csr, &$output, bool $no_text = true',
            'arguments' => '$csr, $output, $no_text',
        ],
    'openssl_csr_export_to_file' =>
        [
            'signatureArguments' => '$csr, string $output_filename, bool $no_text = true',
            'arguments' => '$csr, $output_filename, $no_text',
        ],
    'openssl_digest' =>
        [
            'signatureArguments' => 'string $data, string $digest_algo, bool $binary = false',
            'arguments' => '$data, $digest_algo, $binary',
        ],
    'openssl_cipher_iv_length' =>
        [
            'signatureArguments' => 'string $cipher_algo',
            'arguments' => '$cipher_algo',
        ],
    'openssl_cipher_key_length' =>
        [
            'signatureArguments' => 'string $cipher_algo',
            'arguments' => '$cipher_algo',
        ],
    'openssl_pbkdf2' =>
        [
            'signatureArguments' => 'string $password, string $salt, int $key_length, int $iterations, string $digest_algo = \'sha1\'',
            'arguments' => '$password, $salt, $key_length, $iterations, $digest_algo',
        ],
    'openssl_get_md_methods' =>
        [
            'signatureArguments' => 'bool $aliases = false',
            'arguments' => '$aliases',
        ],
    'openssl_get_cipher_methods' =>
        [
            'signatureArguments' => 'bool $aliases = false',
            'arguments' => '$aliases',
        ],
    'openssl_dh_compute_key' =>
        [
            'signatureArguments' => 'string $public_key, $private_key',
            'arguments' => '$public_key, $private_key',
        ],
    'openssl_random_pseudo_bytes' =>
        [
            'signatureArguments' => 'int $length, &$strong_result',
            'arguments' => '$length, $strong_result',
        ],
    'openssl_error_string' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'openssl_get_cert_locations' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'openssl_get_curve_names' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'openssl_pkcs7_read' =>
        [
            'signatureArguments' => 'string $data, &$certificates',
            'arguments' => '$data, $certificates',
        ],
    'openssl_cms_verify' =>
        [
            'signatureArguments' => 'string $input_filename, int $flags = 0, ?string $certificates, array $ca_info = [], ?string $untrusted_certificates_filename, ?string $content, ?string $pk7, ?string $sigfile, int $encoding = OPENSSL_ENCODING_SMIME',
            'arguments' => '$input_filename, $flags, $certificates, $ca_info, $untrusted_certificates_filename, $content, $pk7, $sigfile, $encoding',
        ],
    'openssl_cms_encrypt' =>
        [
            'signatureArguments' => 'string $input_filename, string $output_filename, $certificate, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC',
            'arguments' => '$input_filename, $output_filename, $certificate, $headers, $flags, $encoding, $cipher_algo',
        ],
    'openssl_cms_sign' =>
        [
            'signatureArguments' => 'string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, $private_key, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, ?string $untrusted_certificates_filename',
            'arguments' => '$input_filename, $output_filename, $certificate, $private_key, $headers, $flags, $encoding, $untrusted_certificates_filename',
        ],
    'openssl_cms_decrypt' =>
        [
            'signatureArguments' => 'string $input_filename, string $output_filename, $certificate, $private_key = null, int $encoding = OPENSSL_ENCODING_SMIME',
            'arguments' => '$input_filename, $output_filename, $certificate, $private_key, $encoding',
        ],
    'openssl_cms_read' =>
        [
            'signatureArguments' => 'string $input_filename, &$certificates',
            'arguments' => '$input_filename, $certificates',
        ],
    'ms_GetVersion' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_GetVersionInt' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_iogetStdoutBufferBytes' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_iogetstdoutbufferstring' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_ioinstallstdinfrombuffer' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_ioinstallstdouttobuffer' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_ioresethandlers' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_iostripstdoutbuffercontenttype' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_iostripstdoutbuffercontentheaders' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_TokenizeMap' =>
        [
            'signatureArguments' => '$map_file_name',
            'arguments' => '$map_file_name',
        ],
    'ms_GetErrorObj' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'ms_ResetErrorList' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uuid_create' =>
        [
            'signatureArguments' => '$uuid_type = UUID_TYPE_DEFAULT',
            'arguments' => '$uuid_type',
        ],
    'uuid_is_valid' =>
        [
            'signatureArguments' => '$uuid',
            'arguments' => '$uuid',
        ],
    'uuid_compare' =>
        [
            'signatureArguments' => '$uuid1, $uuid2',
            'arguments' => '$uuid1, $uuid2',
        ],
    'uuid_is_null' =>
        [
            'signatureArguments' => '$uuid',
            'arguments' => '$uuid',
        ],
    'uuid_generate_md5' =>
        [
            'signatureArguments' => '$uuid_ns, $name',
            'arguments' => '$uuid_ns, $name',
        ],
    'uuid_generate_sha1' =>
        [
            'signatureArguments' => '$uuid_ns, $name',
            'arguments' => '$uuid_ns, $name',
        ],
    'uuid_type' =>
        [
            'signatureArguments' => '$uuid',
            'arguments' => '$uuid',
        ],
    'uuid_variant' =>
        [
            'signatureArguments' => '$uuid',
            'arguments' => '$uuid',
        ],
    'uuid_time' =>
        [
            'signatureArguments' => '$uuid',
            'arguments' => '$uuid',
        ],
    'uuid_mac' =>
        [
            'signatureArguments' => '$uuid',
            'arguments' => '$uuid',
        ],
    'uuid_parse' =>
        [
            'signatureArguments' => '$uuid',
            'arguments' => '$uuid',
        ],
    'uuid_unparse' =>
        [
            'signatureArguments' => '$uuid',
            'arguments' => '$uuid',
        ],
    'bcadd' =>
        [
            'signatureArguments' => 'string $num1, string $num2, ?int $scale = null',
            'arguments' => '$num1, $num2, $scale',
        ],
    'bcsub' =>
        [
            'signatureArguments' => 'string $num1, string $num2, ?int $scale = null',
            'arguments' => '$num1, $num2, $scale',
        ],
    'bcmul' =>
        [
            'signatureArguments' => 'string $num1, string $num2, ?int $scale = null',
            'arguments' => '$num1, $num2, $scale',
        ],
    'bcdiv' =>
        [
            'signatureArguments' => 'string $num1, string $num2, ?int $scale = null',
            'arguments' => '$num1, $num2, $scale',
        ],
    'bcmod' =>
        [
            'signatureArguments' => 'string $num1, string $num2, ?int $scale = null',
            'arguments' => '$num1, $num2, $scale',
        ],
    'bcpow' =>
        [
            'signatureArguments' => 'string $num, string $exponent, ?int $scale = null',
            'arguments' => '$num, $exponent, $scale',
        ],
    'bcsqrt' =>
        [
            'signatureArguments' => 'string $num, ?int $scale',
            'arguments' => '$num, $scale',
        ],
    'bccomp' =>
        [
            'signatureArguments' => 'string $num1, string $num2, ?int $scale = null',
            'arguments' => '$num1, $num2, $scale',
        ],
    'bcpowmod' =>
        [
            'signatureArguments' => 'string $num, string $exponent, string $modulus, ?int $scale = null',
            'arguments' => '$num, $exponent, $modulus, $scale',
        ],
    'rpmvercmp' =>
        [
            'signatureArguments' => 'string $evr1, string $evr2',
            'arguments' => '$evr1, $evr2',
        ],
    'rpminfo' =>
        [
            'signatureArguments' => 'string $path, bool $full = false, ?string &$error = null',
            'arguments' => '$path, $full, $error',
        ],
    'rpmdbinfo' =>
        [
            'signatureArguments' => 'string $nevr, bool $full = false',
            'arguments' => '$nevr, $full',
        ],
    'rpmdbsearch' =>
        [
            'signatureArguments' => 'string $pattern, int $rpmtag = RPMTAG_NAME, int $rpmmire = -1, bool $full = false',
            'arguments' => '$pattern, $rpmtag, $rpmmire, $full',
        ],
    'rpmaddtag' =>
        [
            'signatureArguments' => 'int $tag',
            'arguments' => '$tag',
        ],
    'debugger_print' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'get_call_stack' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'debugger_start_debug' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'debugger_connector_pid' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'debugger_connect' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'debugger_get_server_start_time' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'uploadprogress_get_contents' =>
        [
            'signatureArguments' => 'string $identifier, string $fieldname, int $maxlen = -1',
            'arguments' => '$identifier, $fieldname, $maxlen',
        ],
    'uploadprogress_get_info' =>
        [
            'signatureArguments' => 'string $identifier',
            'arguments' => '$identifier',
        ],
    'gnupg_init' =>
        [
            'signatureArguments' => '$options = null',
            'arguments' => '$options',
        ],
    'gnupg_keyinfo' =>
        [
            'signatureArguments' => '$res, $pattern, $secret_only = false',
            'arguments' => '$res, $pattern, $secret_only',
        ],
    'gnupg_sign' =>
        [
            'signatureArguments' => '$res, $text',
            'arguments' => '$res, $text',
        ],
    'gnupg_clearsignkeys' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'gnupg_verify' =>
        [
            'signatureArguments' => '$res, $text, $signature, &$plaintext = \'\'',
            'arguments' => '$res, $text, $signature, $plaintext',
        ],
    'gnupg_clearencryptkeys' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'gnupg_cleardecryptkeys' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'gnupg_adddecryptkey' =>
        [
            'signatureArguments' => '$res, $kye, $passphrase',
            'arguments' => '$res, $kye, $passphrase',
        ],
    'gnupg_addencryptkey' =>
        [
            'signatureArguments' => '$res, $kye',
            'arguments' => '$res, $kye',
        ],
    'gnupg_setarmor' =>
        [
            'signatureArguments' => '$res, $armor',
            'arguments' => '$res, $armor',
        ],
    'gnupg_encrypt' =>
        [
            'signatureArguments' => '$res, $text',
            'arguments' => '$res, $text',
        ],
    'gnupg_decrypt' =>
        [
            'signatureArguments' => '$res, $enctext',
            'arguments' => '$res, $enctext',
        ],
    'gnupg_export' =>
        [
            'signatureArguments' => '$res, $pattern',
            'arguments' => '$res, $pattern',
        ],
    'gnupg_import' =>
        [
            'signatureArguments' => '$res, $kye',
            'arguments' => '$res, $kye',
        ],
    'gnupg_getengineinfo' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'gnupg_getprotocol' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'gnupg_setsignmode' =>
        [
            'signatureArguments' => '$res, $signmode',
            'arguments' => '$res, $signmode',
        ],
    'gnupg_encryptsign' =>
        [
            'signatureArguments' => '$res, $text',
            'arguments' => '$res, $text',
        ],
    'gnupg_decryptverify' =>
        [
            'signatureArguments' => '$res, $enctext, &$plaintext',
            'arguments' => '$res, $enctext, $plaintext',
        ],
    'gnupg_geterror' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'gnupg_geterrorinfo' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'gnupg_addsignkey' =>
        [
            'signatureArguments' => '$res, $kye, $passphrase',
            'arguments' => '$res, $kye, $passphrase',
        ],
    'gnupg_deletekey' =>
        [
            'signatureArguments' => '$res, $kye, $allow_secret',
            'arguments' => '$res, $kye, $allow_secret',
        ],
    'gnupg_gettrustlist' =>
        [
            'signatureArguments' => '$res, $pattern',
            'arguments' => '$res, $pattern',
        ],
    'gnupg_listsignatures' =>
        [
            'signatureArguments' => '$res, $kyeid',
            'arguments' => '$res, $kyeid',
        ],
    'gnupg_seterrormode' =>
        [
            'signatureArguments' => '$res, $errnmode',
            'arguments' => '$res, $errnmode',
        ],
    'mssql_connect' =>
        [
            'signatureArguments' => '$servername = null, $username = null, $password = null, $new_link = false',
            'arguments' => '$servername, $username, $password, $new_link',
        ],
    'mssql_pconnect' =>
        [
            'signatureArguments' => '$servername = null, $username = null, $password = null, $new_link = false',
            'arguments' => '$servername, $username, $password, $new_link',
        ],
    'mssql_close' =>
        [
            'signatureArguments' => '$link_identifier = null',
            'arguments' => '$link_identifier',
        ],
    'mssql_select_db' =>
        [
            'signatureArguments' => '$database_name, $link_identifier = null',
            'arguments' => '$database_name, $link_identifier',
        ],
    'mssql_query' =>
        [
            'signatureArguments' => '$query, $link_identifier = null, $batch_size = 0',
            'arguments' => '$query, $link_identifier, $batch_size',
        ],
    'mssql_fetch_batch' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mssql_rows_affected' =>
        [
            'signatureArguments' => '$link_identifier',
            'arguments' => '$link_identifier',
        ],
    'mssql_free_result' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mssql_get_last_message' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mssql_num_rows' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mssql_num_fields' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mssql_fetch_field' =>
        [
            'signatureArguments' => '$result, $field_offset = -1',
            'arguments' => '$result, $field_offset',
        ],
    'mssql_fetch_row' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mssql_fetch_array' =>
        [
            'signatureArguments' => '$result, $result_type = MSSQL_BOTH',
            'arguments' => '$result, $result_type',
        ],
    'mssql_fetch_assoc' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'mssql_fetch_object' =>
        [
            'signatureArguments' => '$result',
            'arguments' => '$result',
        ],
    'mssql_field_length' =>
        [
            'signatureArguments' => '$result, $offset = null',
            'arguments' => '$result, $offset',
        ],
    'mssql_field_name' =>
        [
            'signatureArguments' => '$result, $offset = -1',
            'arguments' => '$result, $offset',
        ],
    'mssql_field_type' =>
        [
            'signatureArguments' => '$result, $offset = -1',
            'arguments' => '$result, $offset',
        ],
    'mssql_data_seek' =>
        [
            'signatureArguments' => '$result_identifier, $row_number',
            'arguments' => '$result_identifier, $row_number',
        ],
    'mssql_field_seek' =>
        [
            'signatureArguments' => '$result, $field_offset',
            'arguments' => '$result, $field_offset',
        ],
    'mssql_result' =>
        [
            'signatureArguments' => '$result, $row, $field',
            'arguments' => '$result, $row, $field',
        ],
    'mssql_next_result' =>
        [
            'signatureArguments' => '$result_id',
            'arguments' => '$result_id',
        ],
    'mssql_min_error_severity' =>
        [
            'signatureArguments' => '$severity',
            'arguments' => '$severity',
        ],
    'mssql_min_message_severity' =>
        [
            'signatureArguments' => '$severity',
            'arguments' => '$severity',
        ],
    'mssql_init' =>
        [
            'signatureArguments' => '$sp_name, $link_identifier = null',
            'arguments' => '$sp_name, $link_identifier',
        ],
    'mssql_bind' =>
        [
            'signatureArguments' => '$stmt, $param_name, &$var, $type, $is_output = false, $is_null = false, $maxlen = -1',
            'arguments' => '$stmt, $param_name, $var, $type, $is_output, $is_null, $maxlen',
        ],
    'mssql_execute' =>
        [
            'signatureArguments' => '$stmt, $skip_results = false',
            'arguments' => '$stmt, $skip_results',
        ],
    'mssql_free_statement' =>
        [
            'signatureArguments' => '$stmt',
            'arguments' => '$stmt',
        ],
    'mssql_guid_string' =>
        [
            'signatureArguments' => '$binary, $short_format = null',
            'arguments' => '$binary, $short_format',
        ],
    'apache_child_terminate' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apache_get_modules' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apache_get_version' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apache_getenv' =>
        [
            'signatureArguments' => '$variable, $walk_to_top = false',
            'arguments' => '$variable, $walk_to_top',
        ],
    'apache_lookup_uri' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'apache_note' =>
        [
            'signatureArguments' => '$note_name, $note_value = \'\'',
            'arguments' => '$note_name, $note_value',
        ],
    'apache_reset_timeout' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apache_response_headers' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'apache_setenv' =>
        [
            'signatureArguments' => '$variable, $value, $walk_to_top = false',
            'arguments' => '$variable, $value, $walk_to_top',
        ],
    'virtual' =>
        [
            'signatureArguments' => '$filename',
            'arguments' => '$filename',
        ],
    'libvirt_connect' =>
        [
            'signatureArguments' => 'string $url, bool $readonly = true, array $credentials',
            'arguments' => '$url, $readonly, $credentials',
        ],
    'libvirt_connect_get_all_domain_stats' =>
        [
            'signatureArguments' => '$conn, int $stats = 0, int $flags = 0',
            'arguments' => '$conn, $stats, $flags',
        ],
    'libvirt_connect_get_capabilities' =>
        [
            'signatureArguments' => '$conn, ?string $xpath',
            'arguments' => '$conn, $xpath',
        ],
    'libvirt_connect_get_emulator' =>
        [
            'signatureArguments' => '$conn, ?string $arch',
            'arguments' => '$conn, $arch',
        ],
    'libvirt_connect_get_encrypted' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_connect_get_hostname' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_connect_get_hypervisor' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_connect_get_information' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_connect_get_machine_types' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_connect_get_maxvcpus' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_connect_get_nic_models' =>
        [
            'signatureArguments' => '$conn, ?string $arch',
            'arguments' => '$conn, $arch',
        ],
    'libvirt_connect_get_secure' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_connect_get_soundhw_models' =>
        [
            'signatureArguments' => '$conn, ?string $arch, int $flags = 0',
            'arguments' => '$conn, $arch, $flags',
        ],
    'libvirt_connect_get_sysinfo' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_connect_get_uri' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_domain_attach_device' =>
        [
            'signatureArguments' => '$res, string $xml, int $flags = 0',
            'arguments' => '$res, $xml, $flags',
        ],
    'libvirt_domain_block_commit' =>
        [
            'signatureArguments' => '$res, string $disk, ?string $base, ?string $top, int $bandwidth = 0, int $flags = 0',
            'arguments' => '$res, $disk, $base, $top, $bandwidth, $flags',
        ],
    'libvirt_domain_block_job_abort' =>
        [
            'signatureArguments' => '$res, string $path, int $flags = 0',
            'arguments' => '$res, $path, $flags',
        ],
    'libvirt_domain_block_job_info' =>
        [
            'signatureArguments' => '$res, string $disk, int $flags = 0',
            'arguments' => '$res, $disk, $flags',
        ],
    'libvirt_domain_block_job_set_speed' =>
        [
            'signatureArguments' => '$res, string $path, int $bandwidth, int $flags = 0',
            'arguments' => '$res, $path, $bandwidth, $flags',
        ],
    'libvirt_domain_block_resize' =>
        [
            'signatureArguments' => '$res, string $path, int $size, int $flags = 0',
            'arguments' => '$res, $path, $size, $flags',
        ],
    'libvirt_domain_block_stats' =>
        [
            'signatureArguments' => '$res, string $path',
            'arguments' => '$res, $path',
        ],
    'libvirt_domain_change_boot_devices' =>
        [
            'signatureArguments' => '$res, string $first, string $second, int $flags = 0',
            'arguments' => '$res, $first, $second, $flags',
        ],
    'libvirt_domain_change_memory' =>
        [
            'signatureArguments' => '$res, int $allocMem, int $allocMax, int $flags = 0',
            'arguments' => '$res, $allocMem, $allocMax, $flags',
        ],
    'libvirt_domain_change_vcpus' =>
        [
            'signatureArguments' => '$res, int $numCpus, int $flags = 0',
            'arguments' => '$res, $numCpus, $flags',
        ],
    'libvirt_domain_core_dump' =>
        [
            'signatureArguments' => '$res, string $to',
            'arguments' => '$res, $to',
        ],
    'libvirt_domain_create' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_create_xml' =>
        [
            'signatureArguments' => '$conn, string $xml, int $flags = 0',
            'arguments' => '$conn, $xml, $flags',
        ],
    'libvirt_domain_define_xml' =>
        [
            'signatureArguments' => '$conn, string $xml',
            'arguments' => '$conn, $xml',
        ],
    'libvirt_domain_destroy' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_detach_device' =>
        [
            'signatureArguments' => '$res, string $xml, int $flags = VIR_DOMAIN_AFFECT_LIVE',
            'arguments' => '$res, $xml, $flags',
        ],
    'libvirt_domain_disk_add' =>
        [
            'signatureArguments' => '$res, string $img, string $dev, string $typ, string $driver, int $flags = 0',
            'arguments' => '$res, $img, $dev, $typ, $driver, $flags',
        ],
    'libvirt_domain_disk_remove' =>
        [
            'signatureArguments' => '$res, string $dev, int $flags = 0',
            'arguments' => '$res, $dev, $flags',
        ],
    'libvirt_domain_get_autostart' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_block_info' =>
        [
            'signatureArguments' => '$res, string $dev',
            'arguments' => '$res, $dev',
        ],
    'libvirt_domain_get_connect' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_counts' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_domain_get_disk_devices' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_id' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_info' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_interface_devices' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_job_info' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_metadata' =>
        [
            'signatureArguments' => '$res, int $type, string $uri, int $flags = 0',
            'arguments' => '$res, $type, $uri, $flags',
        ],
    'libvirt_domain_get_name' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_network_info' =>
        [
            'signatureArguments' => '$res, string $mac',
            'arguments' => '$res, $mac',
        ],
    'libvirt_domain_get_next_dev_ids' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_screen_dimensions' =>
        [
            'signatureArguments' => '$res, string $server',
            'arguments' => '$res, $server',
        ],
    'libvirt_domain_get_screenshot' =>
        [
            'signatureArguments' => '$res, string $server, int $scancode = 10',
            'arguments' => '$res, $server, $scancode',
        ],
    'libvirt_domain_get_screenshot_api' =>
        [
            'signatureArguments' => '$res, int $screenID = 0',
            'arguments' => '$res, $screenID',
        ],
    'libvirt_domain_get_uuid' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_uuid_string' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_get_xml_desc' =>
        [
            'signatureArguments' => '$res, ?string $xpath, int $flags = 0',
            'arguments' => '$res, $xpath, $flags',
        ],
    'libvirt_domain_interface_addresses' =>
        [
            'signatureArguments' => '$res, int $source',
            'arguments' => '$res, $source',
        ],
    'libvirt_domain_interface_stats' =>
        [
            'signatureArguments' => '$res, string $path',
            'arguments' => '$res, $path',
        ],
    'libvirt_domain_is_active' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_is_persistent' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_lookup_by_id' =>
        [
            'signatureArguments' => '$conn, string $id',
            'arguments' => '$conn, $id',
        ],
    'libvirt_domain_lookup_by_name' =>
        [
            'signatureArguments' => '$res, string $name',
            'arguments' => '$res, $name',
        ],
    'libvirt_domain_lookup_by_uuid' =>
        [
            'signatureArguments' => '$res, string $uuid',
            'arguments' => '$res, $uuid',
        ],
    'libvirt_domain_lookup_by_uuid_string' =>
        [
            'signatureArguments' => '$res, string $uuid',
            'arguments' => '$res, $uuid',
        ],
    'libvirt_domain_managedsave' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_memory_peek' =>
        [
            'signatureArguments' => '$res, int $start, int $size, int $flags = 0',
            'arguments' => '$res, $start, $size, $flags',
        ],
    'libvirt_domain_memory_stats' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_migrate' =>
        [
            'signatureArguments' => '$res, string $dest_conn, int $flags, string $dname, int $bandwidth = 0',
            'arguments' => '$res, $dest_conn, $flags, $dname, $bandwidth',
        ],
    'libvirt_domain_migrate_to_uri' =>
        [
            'signatureArguments' => '$res, string $dest_uri, int $flags, string $dname, int $bandwidth = 0',
            'arguments' => '$res, $dest_uri, $flags, $dname, $bandwidth',
        ],
    'libvirt_domain_migrate_to_uri2' =>
        [
            'signatureArguments' => '$res, string $dconnuri, string $miguri, string $dxml, int $flags, string $dname, int $bandwidth = 0',
            'arguments' => '$res, $dconnuri, $miguri, $dxml, $flags, $dname, $bandwidth',
        ],
    'libvirt_domain_new' =>
        [
            'signatureArguments' => '$conn, string $name, string|null|false $arch, int $memMB, int $maxmemMB, int $vcpus, string $iso_image, array $disks, array $networks, int $flags = 0',
            'arguments' => '$conn, $name, $arch, $memMB, $maxmemMB, $vcpus, $iso_image, $disks, $networks, $flags',
        ],
    'libvirt_domain_new_get_vnc' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'libvirt_domain_nic_add' =>
        [
            'signatureArguments' => '$res, string $mac, string $network, string $model, int $flags = 0',
            'arguments' => '$res, $mac, $network, $model, $flags',
        ],
    'libvirt_domain_nic_remove' =>
        [
            'signatureArguments' => '$res, string $dev, int $flags = 0',
            'arguments' => '$res, $dev, $flags',
        ],
    'libvirt_domain_qemu_agent_command' =>
        [
            'signatureArguments' => '$res, string $cmd, $timeout = -1, int $flags = 0',
            'arguments' => '$res, $cmd, $timeout, $flags',
        ],
    'libvirt_domain_reboot' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_reset' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_resume' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_send_key_api' =>
        [
            'signatureArguments' => '$res, int $codeset, int $holdtime, array $keycodes, int $flags = 0',
            'arguments' => '$res, $codeset, $holdtime, $keycodes, $flags',
        ],
    'libvirt_domain_send_keys' =>
        [
            'signatureArguments' => '$res, string $server, int $scancode',
            'arguments' => '$res, $server, $scancode',
        ],
    'libvirt_domain_send_pointer_event' =>
        [
            'signatureArguments' => '$res, string $server, int $pos_x, int $pos_y, int $clicked, bool $release = true',
            'arguments' => '$res, $server, $pos_x, $pos_y, $clicked, $release',
        ],
    'libvirt_domain_set_autostart' =>
        [
            'signatureArguments' => '$res, bool $flags',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_set_max_memory' =>
        [
            'signatureArguments' => '$res, int $memory',
            'arguments' => '$res, $memory',
        ],
    'libvirt_domain_set_memory' =>
        [
            'signatureArguments' => '$res, int $memory',
            'arguments' => '$res, $memory',
        ],
    'libvirt_domain_set_memory_flags' =>
        [
            'signatureArguments' => '$res, int $memory = 0, int $flags = 0',
            'arguments' => '$res, $memory, $flags',
        ],
    'libvirt_domain_set_metadata' =>
        [
            'signatureArguments' => '$res, int $type, string $metadata, string $key, string $uri, int $flags = 0',
            'arguments' => '$res, $type, $metadata, $key, $uri, $flags',
        ],
    'libvirt_domain_shutdown' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_suspend' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_undefine' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_domain_undefine_flags' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_update_device' =>
        [
            'signatureArguments' => '$res, string $xml, int $flags',
            'arguments' => '$res, $xml, $flags',
        ],
    'libvirt_domain_xml_from_native' =>
        [
            'signatureArguments' => '$conn, string $format, string $config_data',
            'arguments' => '$conn, $format, $config_data',
        ],
    'libvirt_domain_xml_to_native' =>
        [
            'signatureArguments' => '$conn, string $format, string $xml_data',
            'arguments' => '$conn, $format, $xml_data',
        ],
    'libvirt_domain_xml_xpath' =>
        [
            'signatureArguments' => '$res, string $xpath, int $flags = 0',
            'arguments' => '$res, $xpath, $flags',
        ],
    'libvirt_list_active_domain_ids' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_list_active_domains' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_list_domain_resources' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_list_domains' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_list_inactive_domains' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_list_all_networks' =>
        [
            'signatureArguments' => '$conn, int $flags = VIR_CONNECT_LIST_NETWORKS_ACTIVE|VIR_CONNECT_LIST_NETWORKS_INACTIVE',
            'arguments' => '$conn, $flags',
        ],
    'libvirt_list_networks' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_network_define_xml' =>
        [
            'signatureArguments' => '$res, string $xml',
            'arguments' => '$res, $xml',
        ],
    'libvirt_network_get' =>
        [
            'signatureArguments' => '$res, string $name',
            'arguments' => '$res, $name',
        ],
    'libvirt_network_get_active' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_network_get_autostart' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_network_get_bridge' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_network_get_information' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_network_get_name' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_network_get_uuid' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_network_get_uuid_string' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_network_get_xml_desc' =>
        [
            'signatureArguments' => '$res, ?string $xpath',
            'arguments' => '$res, $xpath',
        ],
    'libvirt_network_set_active' =>
        [
            'signatureArguments' => '$res, int $flags',
            'arguments' => '$res, $flags',
        ],
    'libvirt_network_set_autostart' =>
        [
            'signatureArguments' => '$res, int $flags',
            'arguments' => '$res, $flags',
        ],
    'libvirt_network_undefine' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_node_get_cpu_stats' =>
        [
            'signatureArguments' => '$conn, int $cpunr = VIR_NODE_CPU_STATS_ALL_CPUS',
            'arguments' => '$conn, $cpunr',
        ],
    'libvirt_node_get_cpu_stats_for_each_cpu' =>
        [
            'signatureArguments' => '$conn, int $time = 0',
            'arguments' => '$conn, $time',
        ],
    'libvirt_node_get_free_memory' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_node_get_info' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_node_get_mem_stats' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_list_nodedevs' =>
        [
            'signatureArguments' => '$res, ?string $cap',
            'arguments' => '$res, $cap',
        ],
    'libvirt_nodedev_capabilities' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_nodedev_get' =>
        [
            'signatureArguments' => '$res, string $name',
            'arguments' => '$res, $name',
        ],
    'libvirt_nodedev_get_information' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_nodedev_get_xml_desc' =>
        [
            'signatureArguments' => '$res, ?string $xpath',
            'arguments' => '$res, $xpath',
        ],
    'libvirt_list_all_nwfilters' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_list_nwfilters' =>
        [
            'signatureArguments' => '$conn',
            'arguments' => '$conn',
        ],
    'libvirt_nwfilter_define_xml' =>
        [
            'signatureArguments' => '$conn, string $xml',
            'arguments' => '$conn, $xml',
        ],
    'libvirt_nwfilter_get_name' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_nwfilter_get_uuid' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_nwfilter_get_uuid_string' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_nwfilter_get_xml_desc' =>
        [
            'signatureArguments' => '$res, ?string $xpath',
            'arguments' => '$res, $xpath',
        ],
    'libvirt_nwfilter_lookup_by_name' =>
        [
            'signatureArguments' => '$conn, string $name',
            'arguments' => '$conn, $name',
        ],
    'libvirt_nwfilter_lookup_by_uuid_string' =>
        [
            'signatureArguments' => '$conn, string $uuid',
            'arguments' => '$conn, $uuid',
        ],
    'libvirt_nwfilter_undefine' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_check_version' =>
        [
            'signatureArguments' => 'int $major, int $minor, int $micro, int $type',
            'arguments' => '$major, $minor, $micro, $type',
        ],
    'libvirt_get_iso_images' =>
        [
            'signatureArguments' => 'string $path',
            'arguments' => '$path',
        ],
    'libvirt_get_last_error' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'libvirt_get_last_error_code' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'libvirt_get_last_error_domain' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'libvirt_has_feature' =>
        [
            'signatureArguments' => 'string $name',
            'arguments' => '$name',
        ],
    'libvirt_image_create' =>
        [
            'signatureArguments' => '$conn, string $name, int $size, string $format',
            'arguments' => '$conn, $name, $size, $format',
        ],
    'libvirt_image_remove' =>
        [
            'signatureArguments' => '$conn, string $image',
            'arguments' => '$conn, $image',
        ],
    'libvirt_logfile_set' =>
        [
            'signatureArguments' => '?string $filename, int $maxsize',
            'arguments' => '$filename, $maxsize',
        ],
    'libvirt_print_binding_resources' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'libvirt_version' =>
        [
            'signatureArguments' => 'string $type',
            'arguments' => '$type',
        ],
    'libvirt_domain_has_current_snapshot' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_snapshot_create' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_snapshot_current' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_snapshot_delete' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_snapshot_get_xml' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_domain_snapshot_lookup_by_name' =>
        [
            'signatureArguments' => '$res, string $name, int $flags = 0',
            'arguments' => '$res, $name, $flags',
        ],
    'libvirt_domain_snapshot_revert' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_list_domain_snapshots' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_list_active_storagepools' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_list_inactive_storagepools' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_list_storagepools' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_build' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_create' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_define_xml' =>
        [
            'signatureArguments' => '$res, string $xml, int $flags = 0',
            'arguments' => '$res, $xml, $flags',
        ],
    'libvirt_storagepool_delete' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_destroy' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_get_autostart' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_get_info' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_get_name' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_get_uuid_string' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_get_volume_count' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_get_xml_desc' =>
        [
            'signatureArguments' => '$res, ?string $xpath',
            'arguments' => '$res, $xpath',
        ],
    'libvirt_storagepool_is_active' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_list_volumes' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_lookup_by_name' =>
        [
            'signatureArguments' => '$res, string $name',
            'arguments' => '$res, $name',
        ],
    'libvirt_storagepool_lookup_by_uuid_string' =>
        [
            'signatureArguments' => '$res, string $uuid',
            'arguments' => '$res, $uuid',
        ],
    'libvirt_storagepool_lookup_by_volume' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagepool_refresh' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_storagepool_set_autostart' =>
        [
            'signatureArguments' => '$res, bool $flags',
            'arguments' => '$res, $flags',
        ],
    'libvirt_storagepool_undefine' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagevolume_create_xml' =>
        [
            'signatureArguments' => '$res, string $xml, int $flags = 0',
            'arguments' => '$res, $xml, $flags',
        ],
    'libvirt_storagevolume_create_xml_from' =>
        [
            'signatureArguments' => '$pool, string $xml, $original_volume',
            'arguments' => '$pool, $xml, $original_volume',
        ],
    'libvirt_storagevolume_delete' =>
        [
            'signatureArguments' => '$res, int $flags = 0',
            'arguments' => '$res, $flags',
        ],
    'libvirt_storagevolume_download' =>
        [
            'signatureArguments' => '$res, $stream, int $offset = 0, int $length = 0, int $flags = 0',
            'arguments' => '$res, $stream, $offset, $length, $flags',
        ],
    'libvirt_storagevolume_get_info' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagevolume_get_name' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagevolume_get_path' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_storagevolume_get_xml_desc' =>
        [
            'signatureArguments' => '$res, ?string $xpath, int $flags = 0',
            'arguments' => '$res, $xpath, $flags',
        ],
    'libvirt_storagevolume_lookup_by_name' =>
        [
            'signatureArguments' => '$res, string $name',
            'arguments' => '$res, $name',
        ],
    'libvirt_storagevolume_lookup_by_path' =>
        [
            'signatureArguments' => '$res, string $path',
            'arguments' => '$res, $path',
        ],
    'libvirt_storagevolume_resize' =>
        [
            'signatureArguments' => '$res, int $capacity, int $flags = 0',
            'arguments' => '$res, $capacity, $flags',
        ],
    'libvirt_storagevolume_upload' =>
        [
            'signatureArguments' => '$res, $stream, int $offset = 0, int $length = 0, int $flags = 0',
            'arguments' => '$res, $stream, $offset, $length, $flags',
        ],
    'libvirt_stream_abort' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_stream_close' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_stream_create' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_stream_finish' =>
        [
            'signatureArguments' => '$res',
            'arguments' => '$res',
        ],
    'libvirt_stream_recv' =>
        [
            'signatureArguments' => '$res, string $data, int $len = 0',
            'arguments' => '$res, $data, $len',
        ],
    'libvirt_stream_send' =>
        [
            'signatureArguments' => '$res, string $data, int $length = 0',
            'arguments' => '$res, $data, $length',
        ],
    'stats_absolute_deviation' =>
        [
            'signatureArguments' => 'array $a',
            'arguments' => '$a',
        ],
    'stats_cdf_beta' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_binomial' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_cauchy' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_chisquare' =>
        [
            'signatureArguments' => 'float $par1, float $par2, int $which',
            'arguments' => '$par1, $par2, $which',
        ],
    'stats_cdf_exponential' =>
        [
            'signatureArguments' => 'float $par1, float $par2, int $which',
            'arguments' => '$par1, $par2, $which',
        ],
    'stats_cdf_f' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_gamma' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_laplace' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_logistic' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_negative_binomial' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_noncentral_chisquare' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_noncentral_f' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, float $par4, int $which',
            'arguments' => '$par1, $par2, $par3, $par4, $which',
        ],
    'stats_cdf_noncentral_t' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_normal' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_poisson' =>
        [
            'signatureArguments' => 'float $par1, float $par2, int $which',
            'arguments' => '$par1, $par2, $which',
        ],
    'stats_cdf_t' =>
        [
            'signatureArguments' => 'float $par1, float $par2, int $which',
            'arguments' => '$par1, $par2, $which',
        ],
    'stats_cdf_uniform' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_cdf_weibull' =>
        [
            'signatureArguments' => 'float $par1, float $par2, float $par3, int $which',
            'arguments' => '$par1, $par2, $par3, $which',
        ],
    'stats_covariance' =>
        [
            'signatureArguments' => 'array $a, array $b',
            'arguments' => '$a, $b',
        ],
    'stats_dens_beta' =>
        [
            'signatureArguments' => 'float $x, float $a, float $b',
            'arguments' => '$x, $a, $b',
        ],
    'stats_dens_cauchy' =>
        [
            'signatureArguments' => 'float $x, float $ave, float $stdev',
            'arguments' => '$x, $ave, $stdev',
        ],
    'stats_dens_chisquare' =>
        [
            'signatureArguments' => 'float $x, float $dfr',
            'arguments' => '$x, $dfr',
        ],
    'stats_dens_exponential' =>
        [
            'signatureArguments' => 'float $x, float $scale',
            'arguments' => '$x, $scale',
        ],
    'stats_dens_f' =>
        [
            'signatureArguments' => 'float $x, float $dfr1, float $dfr2',
            'arguments' => '$x, $dfr1, $dfr2',
        ],
    'stats_dens_gamma' =>
        [
            'signatureArguments' => 'float $x, float $shape, float $scale',
            'arguments' => '$x, $shape, $scale',
        ],
    'stats_dens_laplace' =>
        [
            'signatureArguments' => 'float $x, float $ave, float $stdev',
            'arguments' => '$x, $ave, $stdev',
        ],
    'stats_dens_logistic' =>
        [
            'signatureArguments' => 'float $x, float $ave, float $stdev',
            'arguments' => '$x, $ave, $stdev',
        ],
    'stats_dens_normal' =>
        [
            'signatureArguments' => 'float $x, float $ave, float $stdev',
            'arguments' => '$x, $ave, $stdev',
        ],
    'stats_dens_pmf_binomial' =>
        [
            'signatureArguments' => 'float $x, float $n, float $pi',
            'arguments' => '$x, $n, $pi',
        ],
    'stats_dens_pmf_hypergeometric' =>
        [
            'signatureArguments' => 'float $n1, float $n2, float $N1, float $N2',
            'arguments' => '$n1, $n2, $N1, $N2',
        ],
    'stats_dens_pmf_negative_binomial' =>
        [
            'signatureArguments' => 'float $x, float $n, float $pi',
            'arguments' => '$x, $n, $pi',
        ],
    'stats_dens_pmf_poisson' =>
        [
            'signatureArguments' => 'float $x, float $lb',
            'arguments' => '$x, $lb',
        ],
    'stats_dens_t' =>
        [
            'signatureArguments' => 'float $x, float $dfr',
            'arguments' => '$x, $dfr',
        ],
    'stats_dens_uniform' =>
        [
            'signatureArguments' => 'float $x, float $a, float $b',
            'arguments' => '$x, $a, $b',
        ],
    'stats_dens_weibull' =>
        [
            'signatureArguments' => 'float $x, float $a, float $b',
            'arguments' => '$x, $a, $b',
        ],
    'stats_harmonic_mean' =>
        [
            'signatureArguments' => 'array $a',
            'arguments' => '$a',
        ],
    'stats_kurtosis' =>
        [
            'signatureArguments' => 'array $a',
            'arguments' => '$a',
        ],
    'stats_rand_gen_beta' =>
        [
            'signatureArguments' => 'float $a, float $b',
            'arguments' => '$a, $b',
        ],
    'stats_rand_gen_chisquare' =>
        [
            'signatureArguments' => 'float $df',
            'arguments' => '$df',
        ],
    'stats_rand_gen_exponential' =>
        [
            'signatureArguments' => 'float $av',
            'arguments' => '$av',
        ],
    'stats_rand_gen_f' =>
        [
            'signatureArguments' => 'float $dfn, float $dfd',
            'arguments' => '$dfn, $dfd',
        ],
    'stats_rand_gen_funiform' =>
        [
            'signatureArguments' => 'float $low, float $high',
            'arguments' => '$low, $high',
        ],
    'stats_rand_gen_gamma' =>
        [
            'signatureArguments' => 'float $a, float $r',
            'arguments' => '$a, $r',
        ],
    'stats_rand_gen_ibinomial_negative' =>
        [
            'signatureArguments' => 'int $n, float $p',
            'arguments' => '$n, $p',
        ],
    'stats_rand_gen_ibinomial' =>
        [
            'signatureArguments' => 'int $n, float $pp',
            'arguments' => '$n, $pp',
        ],
    'stats_rand_gen_int' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'stats_rand_gen_ipoisson' =>
        [
            'signatureArguments' => 'float $mu',
            'arguments' => '$mu',
        ],
    'stats_rand_gen_iuniform' =>
        [
            'signatureArguments' => 'int $low, int $high',
            'arguments' => '$low, $high',
        ],
    'stats_rand_gen_noncentral_f' =>
        [
            'signatureArguments' => 'float $dfn, float $dfd, float $xnonc',
            'arguments' => '$dfn, $dfd, $xnonc',
        ],
    'stats_rand_gen_noncentral_t' =>
        [
            'signatureArguments' => 'float $df, float $xnonc',
            'arguments' => '$df, $xnonc',
        ],
    'stats_rand_gen_normal' =>
        [
            'signatureArguments' => 'float $av, float $sd',
            'arguments' => '$av, $sd',
        ],
    'stats_rand_gen_t' =>
        [
            'signatureArguments' => 'float $df',
            'arguments' => '$df',
        ],
    'stats_rand_get_seeds' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'stats_rand_phrase_to_seeds' =>
        [
            'signatureArguments' => 'string $phrase',
            'arguments' => '$phrase',
        ],
    'stats_rand_ranf' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'stats_rand_setall' =>
        [
            'signatureArguments' => 'int $iseed1, int $iseed2',
            'arguments' => '$iseed1, $iseed2',
        ],
    'stats_skew' =>
        [
            'signatureArguments' => 'array $a',
            'arguments' => '$a',
        ],
    'stats_standard_deviation' =>
        [
            'signatureArguments' => 'array $a, bool $sample = false',
            'arguments' => '$a, $sample',
        ],
    'stats_stat_binomial_coef' =>
        [
            'signatureArguments' => 'int $x, int $n',
            'arguments' => '$x, $n',
        ],
    'stats_stat_correlation' =>
        [
            'signatureArguments' => 'array $arr1, array $arr2',
            'arguments' => '$arr1, $arr2',
        ],
    'stats_stat_factorial' =>
        [
            'signatureArguments' => 'int $n',
            'arguments' => '$n',
        ],
    'stats_stat_independent_t' =>
        [
            'signatureArguments' => 'array $arr1, array $arr2',
            'arguments' => '$arr1, $arr2',
        ],
    'stats_stat_innerproduct' =>
        [
            'signatureArguments' => 'array $arr1, array $arr2',
            'arguments' => '$arr1, $arr2',
        ],
    'stats_stat_paired_t' =>
        [
            'signatureArguments' => 'array $arr1, array $arr2',
            'arguments' => '$arr1, $arr2',
        ],
    'stats_stat_percentile' =>
        [
            'signatureArguments' => 'array $array, float $perc',
            'arguments' => '$array, $perc',
        ],
    'stats_stat_powersum' =>
        [
            'signatureArguments' => 'array $array, float $power',
            'arguments' => '$array, $power',
        ],
    'stats_variance' =>
        [
            'signatureArguments' => 'array $a, bool $sample = false',
            'arguments' => '$a, $sample',
        ],
    'phpdbg_break_next' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'phpdbg_break_file' =>
        [
            'signatureArguments' => 'string $file, int $line',
            'arguments' => '$file, $line',
        ],
    'phpdbg_break_method' =>
        [
            'signatureArguments' => 'string $class, string $method',
            'arguments' => '$class, $method',
        ],
    'phpdbg_break_function' =>
        [
            'signatureArguments' => 'string $function',
            'arguments' => '$function',
        ],
    'phpdbg_color' =>
        [
            'signatureArguments' => 'int $element, string $color',
            'arguments' => '$element, $color',
        ],
    'phpdbg_prompt' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'phpdbg_exec' =>
        [
            'signatureArguments' => 'string $context',
            'arguments' => '$context',
        ],
    'phpdbg_clear' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'phpdbg_start_oplog' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'phpdbg_end_oplog' =>
        [
            'signatureArguments' => 'array $options = []',
            'arguments' => '$options',
        ],
    'phpdbg_get_executable' =>
        [
            'signatureArguments' => 'array $options = []',
            'arguments' => '$options',
        ],
    'xxtea_encrypt' =>
        [
            'signatureArguments' => '$data, $key',
            'arguments' => '$data, $key',
        ],
    'xxtea_decrypt' =>
        [
            'signatureArguments' => '$data, $key',
            'arguments' => '$data, $key',
        ],
    'zem_get_extension_info_by_id' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zem_get_extension_info_by_name' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zem_get_extensions_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zem_get_license_info' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_is_configuration_changed' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'zend_set_configuration_changed' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'lzf_compress' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'lzf_decompress' =>
        [
            'signatureArguments' => '$data',
            'arguments' => '$data',
        ],
    'lzf_optimized_for' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'igbinary_serialize' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'igbinary_unserialize' =>
        [
            'signatureArguments' => '$str',
            'arguments' => '$str',
        ],
    'mqseries_back' =>
        [
            'signatureArguments' => '$hconn, &$compCode, &$reason',
            'arguments' => '$hconn, $compCode, $reason',
        ],
    'mqseries_begin' =>
        [
            'signatureArguments' => '$hconn, array $beginOptions, &$compCode, &$reason',
            'arguments' => '$hconn, $beginOptions, $compCode, $reason',
        ],
    'mqseries_close' =>
        [
            'signatureArguments' => '$hconn, $hobj, $options, &$compCode, &$reason',
            'arguments' => '$hconn, $hobj, $options, $compCode, $reason',
        ],
    'mqseries_cmit' =>
        [
            'signatureArguments' => '$hconn, &$compCode, &$reason',
            'arguments' => '$hconn, $compCode, $reason',
        ],
    'mqseries_conn' =>
        [
            'signatureArguments' => '$qManagerName, &$hconn, &$compCode, &$reason',
            'arguments' => '$qManagerName, $hconn, $compCode, $reason',
        ],
    'mqseries_connx' =>
        [
            'signatureArguments' => '$qManagerName, array &$connOptions, &$hconn, &$compCode, &$reason',
            'arguments' => '$qManagerName, $connOptions, $hconn, $compCode, $reason',
        ],
    'mqseries_disc' =>
        [
            'signatureArguments' => '$hconn, &$compCode, &$reason',
            'arguments' => '$hconn, $compCode, $reason',
        ],
    'mqseries_get' =>
        [
            'signatureArguments' => '$hConn, $hObj, array &$md, array &$gmo, &$bufferLength, &$msg, &$data_length, &$compCode, &$reason',
            'arguments' => '$hConn, $hObj, $md, $gmo, $bufferLength, $msg, $data_length, $compCode, $reason',
        ],
    'mqseries_inq' =>
        [
            'signatureArguments' => '$hconn, $hobj, $selectorCount, array $selectors, $intAttrCount, &$intAttr, $charAttrLength, &$charAttr, &$compCode, &$reason',
            'arguments' => '$hconn, $hobj, $selectorCount, $selectors, $intAttrCount, $intAttr, $charAttrLength, $charAttr, $compCode, $reason',
        ],
    'mqseries_open' =>
        [
            'signatureArguments' => '$hconn, array &$objDesc, $option, &$hobj, &$compCode, &$reason',
            'arguments' => '$hconn, $objDesc, $option, $hobj, $compCode, $reason',
        ],
    'mqseries_put1' =>
        [
            'signatureArguments' => '$hconn, &$objDesc, &$msgDesc, &$pmo, $buffer, &$compCode, &$reason',
            'arguments' => '$hconn, $objDesc, $msgDesc, $pmo, $buffer, $compCode, $reason',
        ],
    'mqseries_put' =>
        [
            'signatureArguments' => '$hConn, $hObj, array &$md, array &$pmo, $message, &$compCode, &$reason',
            'arguments' => '$hConn, $hObj, $md, $pmo, $message, $compCode, $reason',
        ],
    'mqseries_set' =>
        [
            'signatureArguments' => '$hconn, $hobj, $selectorcount, array $selectors, $intattrcount, array $intattrs, $charattrlength, array $charattrs, &$compCode, &$reason',
            'arguments' => '$hconn, $hobj, $selectorcount, $selectors, $intattrcount, $intattrs, $charattrlength, $charattrs, $compCode, $reason',
        ],
    'mqseries_strerror' =>
        [
            'signatureArguments' => '$reason',
            'arguments' => '$reason',
        ],
    'mb_convert_case' =>
        [
            'signatureArguments' => 'string $string, int $mode, ?string $encoding',
            'arguments' => '$string, $mode, $encoding',
        ],
    'mb_strtoupper' =>
        [
            'signatureArguments' => 'string $string, ?string $encoding',
            'arguments' => '$string, $encoding',
        ],
    'mb_strtolower' =>
        [
            'signatureArguments' => 'string $string, ?string $encoding',
            'arguments' => '$string, $encoding',
        ],
    'mb_language' =>
        [
            'signatureArguments' => '?string $language',
            'arguments' => '$language',
        ],
    'mb_internal_encoding' =>
        [
            'signatureArguments' => '?string $encoding',
            'arguments' => '$encoding',
        ],
    'mb_http_input' =>
        [
            'signatureArguments' => '?string $type',
            'arguments' => '$type',
        ],
    'mb_http_output' =>
        [
            'signatureArguments' => '?string $encoding',
            'arguments' => '$encoding',
        ],
    'mb_detect_order' =>
        [
            'signatureArguments' => 'array|string|null $encoding = null',
            'arguments' => '$encoding',
        ],
    'mb_substitute_character' =>
        [
            'signatureArguments' => 'string|int|null $substitute_character = null',
            'arguments' => '$substitute_character',
        ],
    'mb_parse_str' =>
        [
            'signatureArguments' => 'string $string, &$result',
            'arguments' => '$string, $result',
        ],
    'mb_output_handler' =>
        [
            'signatureArguments' => 'string $string, int $status',
            'arguments' => '$string, $status',
        ],
    'mb_preferred_mime_name' =>
        [
            'signatureArguments' => 'string $encoding',
            'arguments' => '$encoding',
        ],
    'mb_strlen' =>
        [
            'signatureArguments' => 'string $string, $encoding',
            'arguments' => '$string, $encoding',
        ],
    'mb_strpos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0, ?string $encoding',
            'arguments' => '$haystack, $needle, $offset, $encoding',
        ],
    'mb_strrpos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0, ?string $encoding',
            'arguments' => '$haystack, $needle, $offset, $encoding',
        ],
    'mb_stripos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0, ?string $encoding',
            'arguments' => '$haystack, $needle, $offset, $encoding',
        ],
    'mb_strripos' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, int $offset = 0, ?string $encoding',
            'arguments' => '$haystack, $needle, $offset, $encoding',
        ],
    'mb_strstr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $before_needle = false, ?string $encoding',
            'arguments' => '$haystack, $needle, $before_needle, $encoding',
        ],
    'mb_strrchr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $before_needle = false, ?string $encoding',
            'arguments' => '$haystack, $needle, $before_needle, $encoding',
        ],
    'mb_stristr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $before_needle = false, ?string $encoding',
            'arguments' => '$haystack, $needle, $before_needle, $encoding',
        ],
    'mb_strrichr' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, bool $before_needle = false, ?string $encoding',
            'arguments' => '$haystack, $needle, $before_needle, $encoding',
        ],
    'mb_substr_count' =>
        [
            'signatureArguments' => 'string $haystack, string $needle, ?string $encoding',
            'arguments' => '$haystack, $needle, $encoding',
        ],
    'mb_substr' =>
        [
            'signatureArguments' => 'string $string, int $start, ?int $length, ?string $encoding',
            'arguments' => '$string, $start, $length, $encoding',
        ],
    'mb_strcut' =>
        [
            'signatureArguments' => 'string $string, int $start, ?int $length, ?string $encoding',
            'arguments' => '$string, $start, $length, $encoding',
        ],
    'mb_strwidth' =>
        [
            'signatureArguments' => 'string $string, ?string $encoding',
            'arguments' => '$string, $encoding',
        ],
    'mb_strimwidth' =>
        [
            'signatureArguments' => 'string $string, int $start, int $width, string $trim_marker = \'\', ?string $encoding',
            'arguments' => '$string, $start, $width, $trim_marker, $encoding',
        ],
    'mb_convert_encoding' =>
        [
            'signatureArguments' => 'array|string $string, string $to_encoding, array|string|null $from_encoding = null',
            'arguments' => '$string, $to_encoding, $from_encoding',
        ],
    'mb_detect_encoding' =>
        [
            'signatureArguments' => 'string $string, array|string|null $encodings = null, bool $strict = false',
            'arguments' => '$string, $encodings, $strict',
        ],
    'mb_list_encodings' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mb_encoding_aliases' =>
        [
            'signatureArguments' => 'string $encoding',
            'arguments' => '$encoding',
        ],
    'mb_convert_kana' =>
        [
            'signatureArguments' => 'string $string, string $mode = \'KV\', ?string $encoding',
            'arguments' => '$string, $mode, $encoding',
        ],
    'mb_encode_mimeheader' =>
        [
            'signatureArguments' => 'string $string, ?string $charset, ?string $transfer_encoding, string $newline = "\\r\\n", int $indent = 0',
            'arguments' => '$string, $charset, $transfer_encoding, $newline, $indent',
        ],
    'mb_decode_mimeheader' =>
        [
            'signatureArguments' => 'string $string',
            'arguments' => '$string',
        ],
    'mb_encode_numericentity' =>
        [
            'signatureArguments' => 'string $string, array $map, ?string $encoding = null, bool $hex = false',
            'arguments' => '$string, $map, $encoding, $hex',
        ],
    'mb_decode_numericentity' =>
        [
            'signatureArguments' => 'string $string, array $map, ?string $encoding = null, $is_hex = false',
            'arguments' => '$string, $map, $encoding, $is_hex',
        ],
    'mb_send_mail' =>
        [
            'signatureArguments' => 'string $to, string $subject, string $message, array|string $additional_headers = [], ?string $additional_params',
            'arguments' => '$to, $subject, $message, $additional_headers, $additional_params',
        ],
    'mb_get_info' =>
        [
            'signatureArguments' => 'string $type = \'all\'',
            'arguments' => '$type',
        ],
    'mb_check_encoding' =>
        [
            'signatureArguments' => 'array|string|null $value = null, ?string $encoding',
            'arguments' => '$value, $encoding',
        ],
    'mb_regex_encoding' =>
        [
            'signatureArguments' => '?string $encoding',
            'arguments' => '$encoding',
        ],
    'mb_regex_set_options' =>
        [
            'signatureArguments' => '?string $options',
            'arguments' => '$options',
        ],
    'mb_ereg' =>
        [
            'signatureArguments' => 'string $pattern, string $string, &$matches',
            'arguments' => '$pattern, $string, $matches',
        ],
    'mb_eregi' =>
        [
            'signatureArguments' => 'string $pattern, string $string, &$matches',
            'arguments' => '$pattern, $string, $matches',
        ],
    'mb_ereg_replace' =>
        [
            'signatureArguments' => 'string $pattern, string $replacement, string $string, ?string $options = null',
            'arguments' => '$pattern, $replacement, $string, $options',
        ],
    'mb_ereg_replace_callback' =>
        [
            'signatureArguments' => 'string $pattern, callable $callback, string $string, ?string $options = null',
            'arguments' => '$pattern, $callback, $string, $options',
        ],
    'mb_split' =>
        [
            'signatureArguments' => 'string $pattern, string $string, int $limit = -1',
            'arguments' => '$pattern, $string, $limit',
        ],
    'mb_ereg_match' =>
        [
            'signatureArguments' => 'string $pattern, string $string, ?string $options',
            'arguments' => '$pattern, $string, $options',
        ],
    'mb_ereg_search' =>
        [
            'signatureArguments' => '?string $pattern, ?string $options',
            'arguments' => '$pattern, $options',
        ],
    'mb_ereg_search_pos' =>
        [
            'signatureArguments' => '?string $pattern, ?string $options',
            'arguments' => '$pattern, $options',
        ],
    'mb_ereg_search_regs' =>
        [
            'signatureArguments' => '?string $pattern, ?string $options',
            'arguments' => '$pattern, $options',
        ],
    'mb_ereg_search_init' =>
        [
            'signatureArguments' => 'string $string, ?string $pattern, ?string $options',
            'arguments' => '$string, $pattern, $options',
        ],
    'mb_ereg_search_getregs' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mb_ereg_search_getpos' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mb_ereg_search_setpos' =>
        [
            'signatureArguments' => 'int $offset',
            'arguments' => '$offset',
        ],
    'mbregex_encoding' =>
        [
            'signatureArguments' => '$encoding',
            'arguments' => '$encoding',
        ],
    'mbereg' =>
        [
            'signatureArguments' => 'string $pattern, string $string, array &$registers',
            'arguments' => '$pattern, $string, $registers',
        ],
    'mberegi' =>
        [
            'signatureArguments' => 'string $pattern, string $string, array &$registers',
            'arguments' => '$pattern, $string, $registers',
        ],
    'mbereg_replace' =>
        [
            'signatureArguments' => '$pattern, $replacement, $string, $option',
            'arguments' => '$pattern, $replacement, $string, $option',
        ],
    'mbsplit' =>
        [
            'signatureArguments' => '$pattern, $string, $limit',
            'arguments' => '$pattern, $string, $limit',
        ],
    'mbereg_match' =>
        [
            'signatureArguments' => '$pattern, $string, $option',
            'arguments' => '$pattern, $string, $option',
        ],
    'mbereg_search' =>
        [
            'signatureArguments' => '$pattern, $option',
            'arguments' => '$pattern, $option',
        ],
    'mbereg_search_pos' =>
        [
            'signatureArguments' => '$pattern, $option',
            'arguments' => '$pattern, $option',
        ],
    'mbereg_search_regs' =>
        [
            'signatureArguments' => '$pattern, $option',
            'arguments' => '$pattern, $option',
        ],
    'mbereg_search_init' =>
        [
            'signatureArguments' => '$string, $pattern, $option',
            'arguments' => '$string, $pattern, $option',
        ],
    'mbereg_search_getregs' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mbereg_search_getpos' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'mb_chr' =>
        [
            'signatureArguments' => 'int $codepoint, ?string $encoding',
            'arguments' => '$codepoint, $encoding',
        ],
    'mb_ord' =>
        [
            'signatureArguments' => 'string $string, ?string $encoding',
            'arguments' => '$string, $encoding',
        ],
    'mb_scrub' =>
        [
            'signatureArguments' => 'string $string, ?string $encoding',
            'arguments' => '$string, $encoding',
        ],
    'mbereg_search_setpos' =>
        [
            'signatureArguments' => '$position',
            'arguments' => '$position',
        ],
    'mb_str_split' =>
        [
            'signatureArguments' => 'string $string, int $length = 1, ?string $encoding',
            'arguments' => '$string, $length, $encoding',
        ],
    'mb_str_pad' =>
        [
            'signatureArguments' => 'string $string, int $length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT, ?string $encoding = null',
            'arguments' => '$string, $length, $pad_string, $pad_type, $encoding',
        ],
    'expect_popen' =>
        [
            'signatureArguments' => 'string $command',
            'arguments' => '$command',
        ],
    'expect_expectl' =>
        [
            'signatureArguments' => '$expect, array $cases, array &$match = []',
            'arguments' => '$expect, $cases, $match',
        ],
    'session_name' =>
        [
            'signatureArguments' => '$name',
            'arguments' => '$name',
        ],
    'session_module_name' =>
        [
            'signatureArguments' => '$module',
            'arguments' => '$module',
        ],
    'session_save_path' =>
        [
            'signatureArguments' => '$path',
            'arguments' => '$path',
        ],
    'session_id' =>
        [
            'signatureArguments' => '$id',
            'arguments' => '$id',
        ],
    'session_regenerate_id' =>
        [
            'signatureArguments' => 'bool $delete_old_session = false',
            'arguments' => '$delete_old_session',
        ],
    'session_register_shutdown' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_decode' =>
        [
            'signatureArguments' => 'string $data',
            'arguments' => '$data',
        ],
    'session_register' =>
        [
            'signatureArguments' => 'mixed $name, ...$_',
            'arguments' => '$name, $_',
        ],
    'session_unregister' =>
        [
            'signatureArguments' => 'string $name',
            'arguments' => '$name',
        ],
    'session_is_registered' =>
        [
            'signatureArguments' => 'string $name',
            'arguments' => '$name',
        ],
    'session_encode' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_start' =>
        [
            'signatureArguments' => 'array $options = []',
            'arguments' => '$options',
        ],
    'session_create_id' =>
        [
            'signatureArguments' => 'string $prefix = \'\'',
            'arguments' => '$prefix',
        ],
    'session_gc' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_destroy' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_unset' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_set_save_handler' =>
        [
            'signatureArguments' => 'SessionHandlerInterface $sessionhandler, bool $register_shutdown = true',
            'arguments' => '$sessionhandler, $register_shutdown',
        ],
    'session_cache_limiter' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'session_cache_expire' =>
        [
            'signatureArguments' => '$value',
            'arguments' => '$value',
        ],
    'session_set_cookie_params' =>
        [
            'signatureArguments' => 'int $lifetime_or_options, ?string $path = null, ?string $domain = null, ?bool $secure = null, ?bool $httponly = null',
            'arguments' => '$lifetime_or_options, $path, $domain, $secure, $httponly',
        ],
    'session_get_cookie_params' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_write_close' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_commit' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_status' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_abort' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
    'session_reset' =>
        [
            'signatureArguments' => '',
            'arguments' => '',
        ],
];