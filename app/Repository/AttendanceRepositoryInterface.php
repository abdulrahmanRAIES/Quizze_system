<?php


namespace App\Repository;


interface AttendanceRepositoryInterface
{
  public function index();

  public function show($id);

  public function store($request);

} // End Of interface
