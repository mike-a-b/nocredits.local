<?php

class Nocredits_Widget_Text extends WP_Widget{
	public function __construct(){
		parent::__construct(
			'Nocredits_Widget_Text',
			'Nocredits - виджет контактов',
			[
				'name' => 'Nocredits - виджет контактов',
				'description' => 'Вывод контактов на странице contacts.php'
			]
		);
	}

	public function form( $instance ){
		?>
		<p>
			<label for="<?php echo $this->get_field_id('id-text'); ?>">
				Введите текст:
			</label>
			<textarea
				id="<?php echo $this->get_field_id('id-text'); ?>"
				type="text"
				name="<?php echo $this->get_field_name('text'); ?>"
				value="<?php echo $instance['text']; ?>"
				class="widefat"
			>
            <?php echo $instance['text']; ?>
        </textarea>
		</p>
		<?php
	}

	public function widget( $args, $instance ){
		echo apply_filters('Nocredits_Widget_Text', $instance['text']);
	}

	public function update( $new_instance, $old_instance ){
		return $new_instance;
	}
}
