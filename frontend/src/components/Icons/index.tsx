import React from "react";

interface IProps {
	className?: string;
  type: React.ReactNode;
}

const Icon: React.FC<IProps> = ({
  className = '',
  type = ''
}) => {
	return (
    <span className={'inline-block ' + className}>
      {type}
    </span>
  );
};

export default Icon;
export {default as Instagram} from './Social/Instagram';
