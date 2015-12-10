<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
use Illuminate\Support\Facades\URL;

class JobSeekerController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('guest',['only'=>['registration','phpExcel','spout']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    public function phpExcel(){
        ini_set('max_execution_time', 0);
        $url = $_SERVER['DOCUMENT_ROOT'].'/upload/fav.xlsx';
            //$url = $_SERVER['DOCUMENT_ROOT'].'/upload/Flipkart-C_Gardening-wTools.xls';
        //echo $url;exit;
        //$url = 'SampleProductReports.xls';
        $Reader =  \PHPExcel_IOFactory::createReaderForFile($url);
        $Reader->setReadDataOnly(true);
        $objPHPExcel = $Reader->load($url);
        $objWorksheet = $objPHPExcel->getActiveSheet();

        $highestRow = $objWorksheet->getHighestRow();
        $highestColumn = $objWorksheet->getHighestColumn();
        $highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn);
        $rows = array();
        for ($row = 1; $row <= $highestRow; ++$row) {
            for ($col = 0; $col <= $highestColumnIndex; ++$col) {
                $rows[$col] = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
            }
        }
        dd($rows);//exit;
    }

    public function spout(){
        ini_set('max_execution_time', 0);
        $url = $_SERVER['DOCUMENT_ROOT'].'/upload/fav.xlsx';
        $reader = ReaderFactory::create(Type::XLSX); // for XLSX files
//$reader = ReaderFactory::create(Type::CSV); // for CSV files
//$reader = ReaderFactory::create(Type::ODS); // for ODS files

        $reader->open($url);
        $i = $j = 0;
        $rows = array();
        foreach ($reader->getSheetIterator() as $sheet) {
            foreach ($sheet->getRowIterator() as $row) {
                // do stuff with the row
                $rows[$i]= $row;
                $i++;
            }
        }
        dd($rows);//exit;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Show Registration view to user
     */
    public function registration(){
        return view('user.registration');
    }
}
