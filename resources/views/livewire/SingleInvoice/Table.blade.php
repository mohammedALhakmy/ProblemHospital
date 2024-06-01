<button class="btn btn-primary pull-right" wire:click="show_form_add" type="button">اضافة فاتورة جديدة </button><br><br>
<div class="table-responsive">
    <table class="table text-md-nowrap" id="example1" data-page-length="50"style="text-align: center">
        <thead>
        <tr>
            <th>#</th>
            <th>اسم الخدمة</th>
            <th>اسم المريض</th>
            <th>تاريخ الفاتورة</th>
            <th>اسم الدكتور</th>
            <th>القسم</th>
            <th>سعر الخدمة</th>
            <th>قيمة الخصم</th>
            <th>نسبة الضريبة</th>
            <th>قيمة الضريبة</th>
            <th>الاجمالي مع الضريبة</th>
            <th>نوع الفاتورة</th>
            <th>العمليات</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($single_invoices as $single_invoice)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $single_invoice->Service->name ?? ""}}</td>
                <td>{{ $single_invoice->Patient->name ?? ""}}</td>
                <td>{{ $single_invoice->invoice_date ?? ""}}</td>
                <td>{{ $single_invoice->Doctor->name ?? ""}}</td>
                <td>{{ $single_invoice->Section->name ?? ""}}</td>
@if (!empty($single_invoice))
    <td>{{ isset($single_invoice->price) ? number_format($single_invoice->price, 2) : "" }}</td>
@else
    <td></td>
@endif



               <td>{{ $single_invoice && isset($single_invoice->discount_value) ? number_format($single_invoice->discount_value, 2) : "" }}</td>


                <td>{{ $single_invoice->tax_rate ?? ""}}%</td>
           <td>
  {{ $single_invoice && isset($single_invoice->tax_value) ? number_format($single_invoice->tax_value, 2) : "" }}
</td>

<td>
  {{ $single_invoice && isset($single_invoice->total_with_tax) ? number_format($single_invoice->total_with_tax, 2) : "" }}
</td>

<td>
  {{ $single_invoice && isset($single_invoice->type) ? ($single_invoice->type == 1 ? 'نقدي' : 'اجل') : '' }}
</td>


                <td>
@if($single_invoice)
    <button wire:click="edit({{ isset($single_invoice->id) ? $single_invoice->id : '' }})" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>

    <button type="button" href="#delete_invoice" class="btn btn-danger btn-sm"  data-bs-placement="top"  data-bs-effect="effect-super-scaled" data-bs-toggle="modal"
            wire:click="delete({{ isset($single_invoice->id) ? $single_invoice->id : '' }})" ><i class="fa fa-trash"></i></button>


    <button wire:click="print({{ isset($single_invoice->id) ? $single_invoice->id : '' }})" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></button>
@endif

                </td>
            </tr>

        @endforeach
    </table>

    @include('livewire.SingleInvoice.delete')
