<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\ScheduleService;

class ScheduleController extends Controller
{
    protected $scheduleService;

    public function __construct(ScheduleService $scheduleService)
    {
        $this->scheduleService = $scheduleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = $this->scheduleService->list();

        return $schedules;
    }

}
