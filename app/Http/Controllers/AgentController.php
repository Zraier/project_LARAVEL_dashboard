<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function Agentdashboard(){

    return view('agent.agent_dashboard');
    
    }
}
