public class SpaceCraft{

	protected String model;

	SpaceCraft(String model){
		this.model=model;
	}
	void display(){
		System.out.println(m);
	}
}

interface Drive {

	public void drive();
	public void stop();
	public void turn();
}

interface Shuttle{

	public void startShuttle();
	public void stopShuttle();
}

public class Apollo extends SpaceCraft implements Shuttle,Drive {

	private int nowheel;

	Apollo(int nowheel){
		this.nowheel=nowheel;

	}

	public void public static void main(String[] args) {
		
	}

	public void drive(){
		
	}
	 public void stop(){

	 }
	 public void turn(){

	 }

	 public void startShuttle(){

	 }
	 public void stopShuttle(){

	 }
}
