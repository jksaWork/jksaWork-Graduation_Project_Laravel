<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function agentOfferReport(){



        $report = \DB::select("SELECT distinct
        agent_id as sai, agents.name,
        (SELECT COUNT(id) FROM offers WHERE status = 'approved' AND offers.agent_id = sai ) AS approved,
        (SELECT COUNT(id) FROM offers WHERE status = 'under_mainten' AND offers.agent_id = sai  ) AS under_mainten,
        (SELECT COUNT(id) FROM offers WHERE status = 'rejected' AND offers.agent_id = sai
         ) AS rejected,
        (SELECT COUNT(id) FROM offers WHERE status = 'new' AND offers.agent_id = sai  ) AS new,
        (SELECT COUNT(id) FROM offers WHERE offers.agent_id = sai  ) AS total
        FROM `offers`
        LEFT JOIN agents on agents.id = offers.agent_id  WHERE agent_id is not null
        UNION
        SELECT distinct
        0 as sai, 'not assigned' as  name,
        (SELECT COUNT(id) FROM offers WHERE status = 'approved' and agent_id is null  ) AS approved,
        (SELECT COUNT(id) FROM offers WHERE status = 'under_mainten'and agent_id is null   )AS under_mainten,
        (SELECT COUNT(id) FROM offers WHERE status = 'rejected' and agent_id is null  )AS rejected,
        (SELECT COUNT(id) FROM offers WHERE status = 'new' and agent_id is null  )AS new,
        (SELECT COUNT(id) FROM offers WHERE  agent_id is null  ) AS total
        FROM `offers`
        LEFT JOIN agents on agents.id = offers.agent_id WHERE agent_id is null  " );
        return view('reports.agent_offer_report' , compact('report'));
}

public function offerStatusReport(){
$report = \DB::select("SELECT distinct

        (SELECT COUNT(id) FROM offers WHERE status = 'approved'  ) AS approved,
        (SELECT COUNT(id) FROM offers WHERE status = 'under_mainten'   ) AS under_mainten,
        (SELECT COUNT(id) FROM offers WHERE status = 'rejected'
         ) AS rejected,
        (SELECT COUNT(id) FROM offers WHERE status = 'new'   ) AS new,
        (SELECT COUNT(id) FROM offers  ) AS total
        FROM `offers`
        ");

        // dd($report);
        return view('reports.offer_status_report' , compact('report'));
    }



    public function OfferAreaReport(){
        $report_area = \DB::select("SELECT
                count(offers.id) as num , area_id , areas.name from offers , areas group by area_id
        ");

        $report_service = \DB::select("SELECT
                count(offers.id) as num , service_id , services.name  from offers , `services` group by service_id
        ");

        return view('reports.area_service_report' , compact('report_service' , 'report_area'));
    }
}
