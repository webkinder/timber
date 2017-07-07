<?php

class TestTimberGettext extends Timber_UnitTestCase {

	function test__() {
		$context = Timber::get_context();
		$str = Timber::compile_string("{{ __('my_boo') }}", $context);
		$this->assertEquals(__('my_boo'), trim($str));
	}

	function testTranslate() {
		$context = Timber::get_context();
		$str = Timber::compile_string("{{ translate('my_boo') }}", $context);
		$this->assertEquals(translate('my_boo'), trim($str));
	}
  
	function test_e() {
		$context = Timber::get_context();
		$str = Timber::compile_string("{{ _e('my_boo') }}", $context);
		$this->assertEquals(_e('my_boo'), trim($str));
	}
  
	function test_n() {
		$context = Timber::get_context();
		$str = Timber::compile_string("{{ _n('foo', 'foos', 1 ) }}", $context);
		$this->assertEquals(_n('foo', 'foos', 1 ), trim($str));
		$str = Timber::compile_string("{{ _n('foo', 'foos', 2 ) }}", $context);
		$this->assertEquals(_n('foo', 'foos', 2 ), trim($str));
	}

	function test_x() {
		$context = Timber::get_context();
		$str = Timber::compile_string("{{ _x('boo', 'my') }}", $context);
		$this->assertEquals(_x('boo', 'my'), trim($str));
	}
  
	function test_ex() {
		$context = Timber::get_context();
		$str = Timber::compile_string("{{ _ex('boo', 'my') }}", $context);
		$this->assertEquals(_ex('boo', 'my'), trim($str));
	}

	function test_nx() {
		$context = Timber::get_context();
		$str = Timber::compile_string("{{ _nx('boo', 'boos', 1, 'my' ) }}", $context);
		$this->assertEquals(_nx('boo', 'boos', 1, 'my' ), trim($str));
		$str = Timber::compile_string("{{ _nx('boo', 'boos', 2, 'my' ) }}", $context);
		$this->assertEquals(_nx('boo', 'boos', 2, 'my' ), trim($str));
	}
    
}