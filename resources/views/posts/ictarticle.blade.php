@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/blogarticlestyles.css') }}">
@endsection

@section('content')
    <section>
        <h1>&lt;arm vs x86/&gt;</h1>
        <p>
            In 2020 Apple introduced its M1 chip which runs on ARM.<br/>
            Previously, ARM was primarily used for mobile chips.<br/>
            However, when Apple released the M1 chip for MacBooks, it was considered revolutionary.<br/>
            Apple's M chips are only available for Apple products.<br/>
            But this year, in 2024, Qualcomm launched its Snapdragon X series, which also runs on ARM, but for Windows laptops.<br/>
            <br/>
            The main differences between ARM and x86 are power efficiency versus performance and the architecture.<br/>
            ARM focuses more on energy efficiency, making it highly suitable for mobile devices, while x86 focuses more on high performance, which makes it more suitable for desktops and servers.<br/>
            ARM is based on Reduced Instruction Set Computing (RISC), which simplifies the instructions the CPU can execute, leading to lower power consumption.<br/>
            x86, on the other hand, is based on Complex Instruction Set Computing (CISC), which allows for more complex instructions that can perform multiple operations, but at the cost of higher energy consumption.<br/>
            <br/>
            When we compare Qualcomm's Snapdragon X chip, it delivers impressive performance, especially in multi-core tasks, where the Snapdragon significantly outperforms Intel and AMD CPUs.<br/>
            In single-core performance, the Snapdragon X chip is still better than Intel and AMD, but the difference is much smaller.<br/>
            In terms of battery life, Snapdragon beats Intel and AMD by several hours due to ARM's higher energy efficiency.<br/>
            However, on the software side, ARM still has some catching up to do. While there are some applications that work natively on ARM and others that run well via emulation, there are still many programs that are not compatible with the Snapdragon X chip.<br/>
            <br/>
            I believe that ARM can be a great fit for laptops, as is already evident from the performance they deliver.<br/>
            The biggest issue right now is the software support.<br/>
            But as emulation improves and more programs start running natively on ARM, I expect ARM laptops to become the better choice, especially due to the significantly improved battery life that comes with using ARM.
        </p>
    </section>
@endsection
