
<button class="btn btn-primary pull-right" wire:click="show_form_add" type="button">اضافة مجموعة خدمات </button><br><br>
<div class="table-responsive">
    <table class="table text-md-nowrap" id="example1" data-page-length="50"style="text-align: center">
        <thead>
        <tr>
            <th>#</th>
            <th>الاسم</th>
            <th>اجمالي العرض شامل الضريبة</th>
            <th>الملاحظات</th>
            <th>العمليات</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($groups as $group)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $group->name }}</td>
                <td>{{ number_format($group->total_tax_rate, 2) }}</td>
                <td>{{ $group->notes }}</td>
                <td>
                    <button wire:click="edit({{ $group->id }})" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"  data-bs-placement="top"
                            data-bs-effect="effect-super-scaled"
                            data-bs-toggle="modal" href="#deleteGroup{{$group->id}}"><i class="fa fa-trash"></i></button>

                </td>
            </tr>
        @include('livewire.GroupService.delete')
        @endforeach
    </table>

</div>

