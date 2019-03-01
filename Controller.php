<?php 


		// Get Last Serial Number From Database
        $serial_nos = DB::table('process_service')
                ->select('process_service.SL_NO')
                ->orderby('process_service.SL_NO', 'DESC')
                ->limit(1)
                ->get();
        //
        return view('admin.service_create')->with('serial_nos', $serial_nos);


?>