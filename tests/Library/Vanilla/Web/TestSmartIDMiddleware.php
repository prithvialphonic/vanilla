<?php
/**
 * @author Todd Burry <todd@vanillaforums.com>
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license GPLv2
 */

namespace VanillaTests\Library\Vanilla\Web;

use Vanilla\Web\SmartIDMiddleware;

/**
 * A test version of the **SmartIDMiddleware** that doesn't make database calls.
 */
class TestSmartIDMiddleware extends SmartIDMiddleware {
    /**
     * TestSmartIDMiddleware constructor.
     */
    public function __construct() {
    }

    /**
     * Return a dummy value that represents the query parameters.
     *
     * @param string $table The name of the table being fetched.
     * @param string $pk The PK column of the table.
     * @param array $where The where clause of the query.
     * @return string Returns a dummy smart ID value.
     */
    public function fetchValue(string $table, string $pk, array $where) {
        return "($table.$pk.".implodeAssoc(':', '.', $where).')';
    }
}
