<?php
/**
 * Created by PhpStorm.
 * User: 小小徐
 * Date: 2021/1/30
 * Time: 13:32
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TimorController extends Command
{
    /**
     * 命令行执行命令
     * @var string
     */
    protected $signature = 'job:timor_index {arg_name}';

    /**
     * 命令描述
     *
     * @var string
     */
    protected $description = 'job:timor_index desc';
    public function handle()
    {
        $arg_name = $this->argument('arg_name');
        echo json_encode(['name'=>$arg_name]);
        return json_encode(['name'=>$arg_name]);
    }
}
