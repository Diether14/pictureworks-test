<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\Interfaces\AppRepositoryInterface;

class AppendUserComments extends Command
{
    private $appRepository;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'append:comment {id} {comments} {password=aaaa}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Append User Comments';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(AppRepositoryInterface $appRepository)
    {
        $this->appRepository = $appRepository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $id = $this->argument('id');
        $comments = $this->argument('comments');
        $password = $this->argument('password');
        $arr = [
            'id'        => $id,
            'comments'  => $comments,
            'password'  => $password
        ];
        $this->info($this->appRepository->appendUserComments($arr));
    }
}
