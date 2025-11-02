<div class="container mx-auto px-4 py-16">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">
            <?php echo esc_html( $args['title'] ); ?>
        </h1>

        <div class="prose max-w-none">
            <h2 class="text-2xl font-semibold mb-4">1. Quy trình triển khai giải pháp Digital Branding cho <?php echo esc_html( $args['industry_name'] ); ?> tại VV Agency</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>Nghiên cứu</li>
                <li>Tư vấn chiến lược</li>
                <li>Triển khai chiến dịch</li>
                <li>Báo cáo và tối ưu</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-12 mb-6">2. Bảng giá giải pháp Digital Branding tại VV Agency</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="border p-4 font-semibold text-gray-700">Gói giải pháp</th>
                        <th class="border p-4 font-semibold text-gray-700">Cơ bản</th>
                        <th class="border p-4 font-semibold text-gray-700">Chuyên nghiệp</th>
                        <th class="border p-4 font-semibold text-gray-700">Cao cấp</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					$pricing_data = [
						[ 'feature' => 'Giá', 'basic' => 'Liên hệ', 'professional' => 'Liên hệ', 'premium' => 'Liên hệ' ],
						[ 'feature' => 'Tư vấn chiến lược', 'basic' => 'Miễn phí', 'professional' => 'Miễn phí', 'premium' => 'Miễn phí' ],
						[ 'feature' => 'Thiết kế website', 'basic' => true, 'professional' => true, 'premium' => true ],
						[ 'feature' => 'Content', 'basic' => true, 'professional' => true, 'premium' => true ],
						[ 'feature' => 'SEO', 'basic' => true, 'professional' => true, 'premium' => true ],
						[ 'feature' => 'Chăm sóc Google Maps', 'basic' => true, 'professional' => true, 'premium' => true ],
						[ 'feature' => 'Quản trị Fanpage', 'basic' => true, 'professional' => true, 'premium' => true ],
						[ 'feature' => 'Quảng cáo Google Ads', 'basic' => true, 'professional' => true, 'premium' => true ],
						[ 'feature' => 'Quảng cáo Facebook Ads', 'basic' => true, 'professional' => true, 'premium' => false ],
					];

					foreach ( $pricing_data as $row ) :
						?>
                        <tr>
                            <td class="border p-4 font-medium"><?php echo esc_html( $row['feature'] ); ?></td>
							<?php foreach ( [ 'basic', 'professional', 'premium' ] as $plan ) : ?>
                                <td class="border p-4 text-center">
									<?php
									if ( is_bool( $row[ $plan ] ) ) {
										echo $row[ $plan ] ? '<span class="text-green-500 text-2xl">✓</span>' : '';
									} else {
										echo esc_html( $row[ $plan ] );
									}
									?>
                                </td>
							<?php endforeach; ?>
                        </tr>
					<?php endforeach; ?>
                    <tr class="bg-gray-50">
                        <td class="border p-4 font-semibold"></td>
                        <td class="border p-4 text-center"><a href="#" class="text-red-600 hover:underline font-semibold">Liên hệ tư vấn</a></td>
                        <td class="border p-4 text-center"><a href="#" class="text-red-600 hover:underline font-semibold">Liên hệ tư vấn</a></td>
                        <td class="border p-4 text-center"><a href="#" class="text-red-600 hover:underline font-semibold">Liên hệ tư vấn</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
