(function($){
	$.fn.validettaLanguage = {};
	$.validettaLanguage = {
		init : function(){
			$.validettaLanguage.messages = {
				required	: 'Ce champ est requis.',
				email		: 'Adresse e-mail non valide',
				number		: 'Ce champ accepte seulement des valeurs num&eacuteriques.',
				maxLength	: 'Vous devez saisir au maximum {count} caract&egrave;res.',
				minLength	: 'Vous devez saisir au minimum {count} caract&egrave;res.',
				maxChecked  : 'Vous ne pouvez cocher pas plus de {count} cases.',
				minChecked  : 'Vous devez cocher au moins {count} cases.',
				maxSelected : 'Vous ne pouvez s&eacutelectionner plus de {count} options.',
				minSelected : 'Vous devez s&eacutelectionner au moins {count} options.',
				notEqual	: 'Les valeurs ne correspondent pas.',
				creditCard  : 'Numéro de carte de cr&eacuteedit pas valide.'
			};
		}
	};
	$.validettaLanguage.init();
})(jQuery);