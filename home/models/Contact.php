<?php
namespace home\models;

use Yii;
use yii\base\Model;

class Contact extends Model {

	public function zh_CN() {
		return [
			'p' => '蕙勒拥有一支中西合璧、深受尊重的优秀管理队伍，使之享有一个持续稳定、不断发展的管理班子。蕙勒管理队伍既有丰富经验的、懂得在中国管理制造企业的优秀管理者，又有在专门产品和领域有着国际化管理经验的职业经理人。 ',
			'caption' => '蕙勒管理层包括如下成员：',
			'items' => [
				['label' => '董事长兼总裁：', 'name' => '易春红 女士'],
				['label' => '首席运营官COO：', 'name' => '曹畑 先生'],
				['label' => '副总裁：', 'name' => '易冬贵 先生'],
				['label' => '市场与销售副总裁：', 'name' => '冯毅 先生'],
				['label' => '首席财务官：', 'name' => 'Antonio先生'],
				['label' => '行政中心与人力资源部副总裁：', 'name' => '富达女士'],
				['label' => '产品副总监：', 'name' => '金谷'],
				['label' => '集团业务发展副总裁：', 'name' => 'fox先生'],
				['label' => '大区经理：', 'name' => '方海先生'],
			]
		];
	}

	public function en() {
		return [
			'p' => 'Le Hui have a Chinese and Western, well-respected outstanding management team, so that enjoys a steady and growing management team. Le LOH both experienced management team, outstanding managers know how to manage manufacturing enterprises in China, but also in the field of specialized products and has international management experience of professional managers. ',
			'caption' => 'Le LOH members of management include the following:',
			'items' => [
					[ 'label' => 'Chairman and CEO:', 'name' => 'Yi Chun Ladies'],
					[ 'label' => 'COO COO:', 'name' => 'Mr. Cao Tian'],
					[ 'label' => 'vice president:', 'name' => 'Dong Yi your Mr.'],
					[ 'label' => 'market and vice president of sales:', 'name' => 'Mr. Feng Yi'],
					[ 'label' => 'CFO:', 'name' => 'Mr. Antonio'],
					[ 'label' => 'Vice President, Human Resources and Administration Center:', 'name' => 'Fidelity Ladies'],
					[ 'label' => 'deputy director of product:', 'name' => 'Valley'],
					[ 'label' => 'Group Vice President, Business Development:', 'name' => 'Mr fox'],
					[ 'label' => 'regional manager:', 'name' => 'Mr. Fang Hai'],
				]
			];
	}

	public function contactInfo() {
		switch (Yii::$app->language) {
			case 'zh-CN':
				return $this->zh_CN();
				break;
			case 'en':
				return $this->en();
				break;
		}
	}

}