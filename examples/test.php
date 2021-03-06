<?php
/**
 * This file is part of the Decode Framework
 * @license http://opensource.org/licenses/MIT
 */
namespace df\apex\directory;

use df;
use df\core;
use df\apex as TestAlias;

interface MyInterface extends ArrayAccess, \Countable
{
}

trait MyTrait
{
    protected $vaf = [
        'gg'
    ];

    public function hello()
    {
    }
}

$string = "$other\n\n\nactual text";
$constant = CONSTANT;

str_replace("\r", "\n", $string);

class Test extends core\Base implements namespace\gg\MyInterface, ffff\f\ArrayAccess
{
    use core\MyTrait;

    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }

    /**
     * This is docblock
     */
    public function test(?string $in=null, callable $renderer): ?string
    {
        self::jam();
        return 'hello';
    }

    public function __construct()
    {
        (string)some\other\Thing::go();

        $query
            ->countRelation('tasks')
            ->countRelation('goals')
            ->correlateRelation('tasks', 'COUNT(completionDate)', 'completedTasks')
            ->correlate('SUM(time) as time')
                ->from('axis://job/Log', 'log')
                ->whereCorrelation('log.task', 'in', 'id')
                    ->from('axis://job/Task', 'task')
                    ->whereField('task.category', '=', 'category.id')
                    ->endCorrelation()
                ->endCorrelation()
            ->importRelationBlock('project', 'link');
    }

    protected function _flaps(arch\IRequest $request): ?core\Uri
    {
        if (!class_exists($class)
        || $request instanceof arch\Stuff) {
            throw core\Error::ENotFound(
                'Css processor '.$name.' could not be found'
            );
        }

        return $this->settings->test(function (?int $in) {
            return $in ?? $out;
        });
    }
}
?>

<div class="special">Test</div>
