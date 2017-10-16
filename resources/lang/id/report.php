<?php 

return [
    'admin' => [
        'title' => 'Laporan Admin',
        'page_title' => 'Laporan Admin',
        'page_title_desc' => '',
        'header' => [
            'user' => 'Pengguna',
            'role' => 'Peran',
            'store' => 'Toko',
            'unit' => 'Satuan',
            'phone_provider' => 'Provider Telepon',
            'settings' => 'Setting',
            'purchase_order' => 'Pembelian',
            'sales_order' => 'Penjualan',
        ],
        'field' => [
            'user' => 'Pengguna',
            'email' => 'Email',
            'role' => 'Peran',
            'profile' => 'Profil',
            'name' => 'Nama',
            'permission' => 'Ijin',
            'tax_id' => 'NPWP',
            'symbol' => 'Simbol',
            'short_name' => 'Singkatan',
        ],
    ],
    'master' => [
        'title' => 'Laporan Master',
        'page_title' => 'Laporan Master',
        'page_title_desc' => '',
        'header' => [
            'customer' => 'Pelanggan',
            'supplier' => 'Supplier',
            'product' => 'Produk',
            'product_type' => 'Tipe Produk',
            'bank' => 'Bank',
            'warehouse' => 'Gudang',
            'truck' => 'Truk',
            'truck_maintenance' => 'Pemeliharaan Truk',
            'vendor_trucking' => 'Layanan Angkutan',
        ],
        'field' => [
            'name' => 'Nama',
            'profile_name' => 'Profil',
            'bank_account' => 'Akun Bank',
            'short_code' => '',
            'short_name' => '',
            'branch' => 'Cabang',
            'branch_code' => 'Kode Cabang',
            'plate_number' => 'Plat Nomor',
        ],
    ],
    'monitoring' => [
        'title' => 'Monitoring',
        'page_title' => 'Monitoring',
        'page_title_desc' => '',
        'header' => [
            'title' => 'Monitoring',
        ],
    ],
    'tax' => [
        'title' => 'Laporan Pajak',
        'page_title' => 'Pajak',
        'page_title_desc' => '',
        'header' => [
            'title' => 'Laporan Pajak'
        ],
        'input' => [
            'table' => [
                'header' => [
                    'invoice_date' => 'Tanggal Faktur',
                    'invoice_no' => 'No Faktur',
                    'detail' => 'Uraian',
                    'qty' => 'Satuan (kg)',
                    'unit_price' => 'Harga Satuan',
                    'tax_base' => 'DPP Beli (Rp)',
                    'gst' => 'PPN-PM (Rp)',
                    'grand_total' => 'Total yang dibayar (Rp)'
                ]
            ]
        ],
    ],
    'transaction' => [
        'title' => 'Laporan Transaksi',
        'page_title' => 'Laporan Transaksi',
        'page_title_desc' => '',
        'header' => [
            'purchase_order' => 'Pembelian',
            'sales_order' => 'Penjualan',
        ],
        'field' => [
            'po_code' => 'Kode',
            'po_date' => 'Tanggal',
            'shipping_date' => 'Tgl Kirim',
            'receipt_date' => 'Tgl Terima',
            'supplier' => 'Supplier',
            'so_code' => 'Kode',
            'so_date' => 'Tanggal',
            'deliver_date' => 'Tgl Kirim',
            'customer' => 'Pelanggan',
        ],
    ],
    'template' => [
        'warehouse' => [
            'report_name' => 'Laporan Gudang',
            'parameter' => [
                'name' => 'Nama',
            ],
            'header' => [
                'store' => 'Toko',
                'name' => 'Nama',
                'address' => 'Alamat',
                'phone_number' => 'No. Telp',
                'status' => 'Status',
                'remarks' => 'Catatan',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'vendor_trucking' => [
            'report_name' => 'Laporan Penyedia Pengiriman',
            'parameter' => [
                'name' => 'Nama',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
            'header' => [
                'store' => 'Toko',
                'name' => 'Nama',
                'address' => 'Alamat',
                'tax_id' => 'NPWP No.',
                'status' => 'Status',
                'remarks' => 'Keterangan',
            ],
        ],
        'truck_maintenance' => [
            'report_name' => 'Laporan Perawatan Truk',
            'parameter' => [
                'plate_number' => 'Nomor Plat',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
            'header' => [
                'store' => 'Toko',
                'plate_number' => 'Plat Nomor',
                'maintenance_type' => 'Tipe Pemeliharaan',
                'cost' => 'Biaya',
                'odometer' => 'Odometer',
                'remarks' => 'Keterangan',
            ],
        ],
        'bank' => [
            'report_name' => 'Laporan Bank',
            'parameter' => [
                'name' => 'Nama',
                'short_name' => 'Nama Singkat',
                'branch' => 'Cabang',
                'branch_code' => 'Kode Cabang',
            ],
            'header' => [
                'name' => 'Nama',
                'short_name' => 'Nama Singkat',
                'branch' => 'Cabang',
                'branch_code' => 'Code Cabang',
                'status' => 'Status',
                'remarks' => 'Keterangan',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'customer' => [
            'report_name' => 'Laporan Data Pelanggan',
            'parameter' => [
                'name' => 'Nama',
                'profile_name' => 'Nama Profil',
                'bank_account' => 'Akun Bank',
            ],
            'header' => [
                'address' => 'Alamat',
                'phone_number' => 'No Telp',
                'city' => 'Kota',
                'tax_id' => 'NPWP No.',
                'status' => 'Status',
                'remarks' => 'Keterangan',
                'payment_due_day' => 'Tenggat Pembayaran',
                'price_level' => 'Level Harga',
                'person_in_charge' => 'Penanggung Jawab',
                'no' => 'No',
                'first_name' => 'Nama Depan',
                'last_name' => 'Nama Belakang',
                'ic_number' => 'No. KTP',
                'phone_numbers' => 'No Telp',
                'provider' => 'Provider',
                'number' => 'Nomor',
                'bank_accounts' => 'Akun Bank',
                'bank' => 'Bank',
                'account_number' => 'Nomor Akun',
                'store' => 'Toko',
                'sign_code' => 'Kode',
                'name' => 'Nama',
                'fax_num' => 'No Fax',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'phone_provider' => [
            'report_name' => 'Laporan Daftar Provider Telepon',
            'parameter' => [
                'name' => 'Nama',
                'short_name' => 'Singkatan',
            ],
            'header' => [
                'name' => 'Nama',
                'short_name' => 'Singkatan',
                'prefix' => 'Prefix',
                'status' => 'Status',
                'remarks' => 'Keterangan',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'product' => [
            'report_name' => 'Laporan Daftar Produk',
            'parameter' => [
                'name' => 'Nama',
                'short_code' => 'Singkatan',
            ],
            'header' => [
                'product_type' => 'Tipe Produk',
                'name' => 'Nama',
                'short_code' => 'Singkatan',
                'product_units' => 'Satuan',
                'description' => 'Deskripsi',
                'status' => 'Status',
                'remarks' => 'Keterangan',
                'unit' => 'Satuan',
                'conversion_value' => 'Nilai Satuan',
                'store' => 'Toko',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'product_type' => [
            'report_name' => 'Laporan Daftar Tipe Produk',
            'parameter' => [
                'name' => 'Nama',
                'short_code' => 'Singkatan',
            ],
            'header' => [
                'store' => 'Toko',
                'name' => 'Nama',
                'short_code' => 'Singkatan',
                'description' => 'Deskripsi',
                'status' => 'Status',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'role' => [
            'report_name' => 'Laporan Daftar Peran',
            'parameter' => [
                'name' => 'Nama',
                'permission' => 'Ijin',
            ],
            'header' => [
                'name' => 'Nama',
                'display_name' => 'Nama Tampilan',
                'description' => 'Deskripsi',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'store' => [
            'report_name' => 'Laporan Daftar Toko',
            'parameter' => [
                'name' => 'Nama',
                'tax_id' => 'No. NPWP',
            ],
            'header' => [
                'name' => 'Nama',
                'address' => 'Alamat',
                'phone_num' => 'No. Telp',
                'fax_num' => 'No. Fax',
                'tax_id' => 'No. NPWP',
                'status' => 'Status',
                'remarks' => 'Keterangan',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'supplier' => [
            'report_name' => 'Laporan Daftar Supplier',
            'parameter' => [
                'name' => 'Nama',
                'profile_name' => 'Nama Profil',
                'bank_account' => 'Akun Bank',
            ],
            'header' => [
                'address' => 'Alamat',
                'phone_number' => 'No Telp',
                'city' => 'Kota',
                'tax_id' => 'No. NPWP',
                'status' => 'Status',
                'remarks' => 'Keterangan',
                'payment_due_day' => 'Tenggat Pembayaran',
                'fax_number' => 'No. Fax',
                'person_in_charge' => 'Penanggung Jawab',
                'no' => 'No.',
                'first_name' => 'Nama Depan',
                'last_name' => 'Nama Belakang',
                'ic_number' => 'No. KTP',
                'phone_numbers' => 'No Telp',
                'provider' => 'Provider',
                'number' => 'No. Telp',
                'bank_accounts' => 'Akun Bank',
                'bank' => 'Bank',
                'account_number' => 'Nomor Akun',
                'store' => 'Toko',
                'sign_code' => 'Kode',
                'name' => 'Nama',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'truck' => [
            'report_name' => 'Laporan Daftar Truk',
            'parameter' => [
                'plate_number' => 'Plat Nomor',
            ],
            'header' => [
                'store' => 'Toko',
                'truck_type' => 'Tipe Truk',
                'plate_number' => 'Nomor Plat',
                'inspection_date' => 'Tanggal Inspeksi',
                'driver' => 'Pengemudi',
                'status' => 'Status',
                'remarks' => 'Keterangan',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'unit' => [
            'report_name' => 'Laporan Daftar Satuan',
            'parameter' => [
                'name' => 'Nama',
                'symbol' => 'Simbol',
                'tax_id' => '',
            ],
            'header' => [
                'name' => 'Nama',
                'symbol' => 'Simbol',
                'status' => 'Status',
                'remarks' => 'Keterangan',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'user' => [
            'report_name' => 'Laporan Daftar Nama',
            'parameter' => [
                'name' => 'Nama',
                'email' => 'Email',
                'role' => 'Peran',
                'profile_name' => 'Nama Profil',
                'profile' => 'Profil',
            ],
            'header' => [
                'name' => 'Nama',
                'email' => 'Email',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'purchase_order' => [
            'report_name' => 'Laporan Pembelian',
            'parameter' => [
                'po_code' => 'Kode PO',
                'po_date' => 'Tanggal PO',
                'shipping_date' => 'Tanggal Pengiriman',
                'receipt_date' => 'Tanggal Terima',
                'supplier' => 'Supplier',
            ],
            'header' => [
                'code' => 'Kode',
                'supplier' => 'Supplier',
                'po_type' => 'Tipe PO',
                'po_created' => 'Tanggal Buat',
                'status' => 'Status',
                'shipping_date' => 'Tanggal Pengiriman',
                'warehouse' => 'Gudang',
                'vendor_trucking' => 'Jasa Angkutan',
                'remarks' => 'Keterangan',
                'items' => 'Barang',
                'product' => 'Produk',
                'quantity' => 'Jumlah',
                'unit' => 'Satuan',
                'price' => 'Harga',
                'total_price' => 'Total Harga',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'sales_order' => [
            'report_name' => '',
            'parameter' => [
                'so_code' => 'Kode Penjualan',
                'so_date' => 'Tanggal Penjualan',
                'shipping_date' => 'Tanggal Kirim',
                'receipt_date' => 'Tanggal Terima',
                'supplier' => 'Supplier',
                'po_date' => 'Tanggal Buat',
                'deliver_date' => 'Tanggal Kirim',
                'customer' => 'Pelanggan',
            ],
            'header' => [
                'customer' => 'Pelanggan',
                'so_type' => 'Tipe Penjualan',
                'so_created' => 'Tanggal Pembuatan',
                'status' => 'Status',
                'shipping_date' => 'Tanggal Pengiriman',
                'warehouse' => 'Gudang',
                'vendor_trucking' => 'Jasa Angkutan',
                'remarks' => 'Keterangan',
                'items' => 'Barang',
                'product' => 'Produk',
                'quantity' => 'Jumlah',
                'unit' => 'Satuan',
                'price' => 'Harga',
                'total_price' => 'Total Harga',
                'code' => 'Kode',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
    ],
    'viewer' => [
        'title' => 'Tampilan Laporan',
        'page_title' => 'Tampilan Laporan',
        'page_title_desc' => '',
    ],
];