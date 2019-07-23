<?PHP

use Ramsey\Uuid\Uuid;

namespace Ajaramillo208\Snap23;

require_once ("autoload.php");
require_once(dirname(__DIR__) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;

/**
 * this class is for a book registry
 * It will include a book id and book title. this can be easily extended to implement more features if needed
 */

class Book {
	use validateUuid;
	/**
	 * id for this book, this is the primary key
	 * @var Uuid $bookId
	 */
	private $bookId;

	/**
	 * title for this book
	 * @var $bookTitle
	 */
	private $bookTitle;


	/**
 	*constructor for this book
 	*@param string|uuid $newBookId id of this author or null if a new author
 	*@param string $newBookTitle new value of book title
 	*@throws\InvalidArgumentException if data types are not valid
 	*@throws\RangeException if data values are out of bounds (e.g., strings too long, negative integers)
 	*@throws\TypeError if data types violate type hints
 	*@throws\Exception if some other exception occurs
 */
public function __construct($newBookId, $newBookTitle){
	try {
		$this->setBookId($newBookId);
		$this->setBookTitle($newBookTitle);
		}
		//determine what exeption type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
}

/**
 *
 */