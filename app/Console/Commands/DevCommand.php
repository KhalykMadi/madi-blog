<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some function';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {



//        $profile = Profile::query()->find(1);
//        $worker = Worker::query()->find(1);
//        dd($worker->profile->toArray());
        return 0;
    }

    private function prepareData()
    {
        $position1 = Position::create([
            'title' => 'Developer'
        ]);

        $position2 = Position::create([
            'title' => 'Manager'
        ]);

        $workerData = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'Ivan@mail.ru',
            'position_id' => $position1->id,
            'age' => '220',
            'description' => 'Some developer',
            'is_married' => false,
        ];

        $workerData2 = [
            'name' => 'Maks',
            'surname' => 'Maks',
            'email' => 'Maks@mail.ru',
            'position_id' => $position1->id,
            'age' => '34',
            'description' => 'Front developer',
            'is_married' => true,
        ];

        $workerData3 = [
            'name' => 'Alex',
            'surname' => 'Alex',
            'email' => 'Alex@mail.ru',
            'position_id' => $position2->id,
            'age' => '24',
            'description' => 'Backend developer',
            'is_married' => false,
        ];

        $worker = Worker::create($workerData);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'Tokyo',
            'skill' => 'Coder',
            'experience' => 5,
            'finished_study_at' => '2020-06-04'
        ];

        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Almaty',
            'skill' => 'Bac Coder',
            'experience' => 5,
            'finished_study_at' => '2020-06-04'
        ];

        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Moscow',
            'skill' => 'Backend Coder',
            'experience' => 5,
            'finished_study_at' => '2020-06-04'
        ];

        Profile::create($profileData);
        Profile::create($profileData2);
        Profile::create($profileData3);

    }
}
