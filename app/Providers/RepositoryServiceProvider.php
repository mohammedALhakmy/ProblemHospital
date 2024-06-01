<?php

namespace App\Providers;

use App\Interfaces\Dashboard\AmbulanceInterface;
use App\Interfaces\Dashboard\Dashboard_Laboratorie_Employee\InvoicesRepositoryInterface;
use App\Interfaces\Dashboard\Dashboard_Ray_Employee\InvoicesInterface2;
use App\Interfaces\Dashboard\Doctor\DoctorInterface;
use App\Interfaces\Dashboard\DoctorD\InvoicesInterface;
use App\Interfaces\Dashboard\DoctorD\LaboratorieInterface;
use App\Interfaces\Dashboard\DoctorD\RayInterface;
use App\Interfaces\Dashboard\InsuranceInterface;
use App\Interfaces\Dashboard\LaboratorieEmployee\LaboratorieEmployeeRepositoryInterface;
use App\Interfaces\Dashboard\PatientInterface;
use App\Interfaces\Dashboard\RayEmployeeRepository;
use App\Interfaces\Dashboard\Section\SectionInterface;
use App\Interfaces\Dashboard\Finance\ReceiptRepositoryInterface;
use App\Interfaces\Dashboard\ServiceInterface;
use App\Repository\Dashboard\AmbulanceRepository;
use App\Repository\Dashboard\Dashboard_Laboratorie_Employee\InvoicesRepository5;
use App\Repository\Dashboard\Dashboard_Ray_Employee\InvoicesRepository2;
use App\Repository\Dashboard\Doctor\DoctorRepository;
use App\Repository\Dashboard\DoctorD\InvoicesRepository;
use App\Repository\Dashboard\DoctorD\LaboratorieRepository;
use App\Repository\Dashboard\DoctorD\RayRepository;
use App\Repository\Dashboard\InsuranceRepository;
use App\Repository\Dashboard\LaboratorieEmployee\LaboratorieEmployeeRepositoryInterface1;
use App\Repository\Dashboard\PatientRepository;
use App\Repository\Dashboard\Finance\ReceiptRepository;
use App\Repository\Dashboard\RayEmployeeInterface;
use App\Repository\Dashboard\Section\SectionRepository;
use App\Repository\Dashboard\ServiceRepository;
use App\Interfaces\Dashboard\Finance\PaymentRepositoryInterface;
use App\Repository\Dashboard\Finance\PaymentRepository;
use App\Repository\LaboratorieEmployee\LaboratorieEmployeeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(SectionInterface::class, SectionRepository::class);
        $this->app->bind(DoctorInterface::class, DoctorRepository::class);
        $this->app->bind(ServiceInterface::class, ServiceRepository::class);
        $this->app->bind(InsuranceInterface::class, InsuranceRepository::class);
        $this->app->bind(AmbulanceInterface::class, AmbulanceRepository::class);
        $this->app->bind(PatientInterface::class, PatientRepository::class);
        $this->app->bind(ReceiptRepositoryInterface::class, ReceiptRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class,PaymentRepository::class);
        //$this->app->bind(GroupInvoiceInterface::class,GroupInvoiceRepository::class);
        $this->app->bind(InvoicesInterface::class,InvoicesRepository::class);
         $this->app->bind(InvoicesInterface2::class,InvoicesRepository2::class);
        $this->app->bind(RayInterface::class,RayRepository::class);
        $this->app->bind(LaboratorieInterface::class,LaboratorieRepository::class);
        $this->app->bind(RayEmployeeRepository::class,RayEmployeeInterface::class);
        $this->app->bind(LaboratorieEmployeeRepositoryInterface::class,LaboratorieEmployeeRepositoryInterface1::class);
          $this->app->bind(InvoicesRepositoryInterface::class,InvoicesRepository5::class);
    }


    public function boot(): void
    {
        //
    }
}
